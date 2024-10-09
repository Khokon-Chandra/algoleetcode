<script setup>
import { onMounted, onUnmounted, ref, toRefs, watchEffect } from "vue";
import * as monaco from "monaco-editor";
import { useResizeObserver, useDebounceFn, useLocalStorage } from "@vueuse/core";


const props = defineProps({
    type: String,
    theme: String,

})

const { type, theme } = toRefs(props);

const emit = defineEmits(["code-change"]);

// Refs for the container and editor
const container = ref(null);
let editor;

// Use local storage for the code
const code = useLocalStorage(`save-code-${type.value}`, "");


watchEffect(() => {
    monaco.editor.setTheme(props.theme)
})

onMounted(() => {

    editor = monaco.editor.create(container.value, {
        language: type.value,
        theme: theme.value,
        value: code.value
    })

    if (code.value) {
        emit("code-change", {
            type: type.value,
            code: code.value
        })
    }

    editor.onDidChangeModelContent(() => {
        useDebounceFn(function () {
            if (code.value !== editor.getValue()) {
                code.value = editor.getValue();

                emit("code-change", {
                    type: type.value,
                    code: code.value,
                });
            }
        }, 500)()
    })
})


const resizer = useResizeObserver(container, () => {
    editor.layout();
});


onUnmounted(() => {
    editor.dispose();
    resizer.stop();
})

</script>


<template>
    <div ref="container" class="h-full">

    </div>
</template>