<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Splitpanes, Pane } from 'splitpanes';
import 'splitpanes/dist/splitpanes.css';
import Playground from '@/Layouts/Playground.vue';
import Description from '@/Pages/Problem/Pane/Description.vue'
import CodeBlock from '@/Pages/Problem/Pane/CodeBlock.vue'


const isHorizontal = ref(true);


function handleResize() {
    const width = window.innerWidth;
    if (width < 640) {
        isHorizontal.value = true;  // Single column on small screens
    } else {
        isHorizontal.value = false;   // Two columns (horizontal) on large screens
    }
}

onMounted(() => {
    window.addEventListener('resize', handleResize);
    handleResize();  // Initial call on component mount
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', handleResize);
});

</script>

<template>
    <Playground>
        <splitpanes :horizontal="isHorizontal">
            <!-- Left Pane: Task Description -->
            <pane>
                <Description/>
            </pane>

            <!-- Right Pane: Code Editor -->
            <pane>
                <CodeBlock/>
            </pane>
        </splitpanes>
    </Playground>
</template>
<style scoped>
.splitpanes--vertical {
    column-gap: 3px;
}

.splitpanes--horizontal {
    row-gap: 3px;
}
</style>