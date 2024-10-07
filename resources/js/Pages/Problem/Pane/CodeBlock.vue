<script setup>
import {ref} from 'vue';
import { Link } from '@inertiajs/vue3';
import { Splitpanes, Pane } from 'splitpanes';
import 'splitpanes/dist/splitpanes.css';
import { useLocalStorage } from "@vueuse/core";


import Editor from '@/Components/Problem/Editor.vue';




const selectedLanguage = useLocalStorage("selected-language","cpp");

const onChange = (payload) => {
    console.log(payload);
}

const updateSelectedLanguage = () => {

}

</script>

<template>
    <splitpanes :horizontal="true">
        <pane size="80">
            <div
                class="flex flex-col border border-neutral-300 dark:border-neutral-700 rounded-lg bg-white dark:bg-neutral-800 h-full overflow-hidden">

                <!-- Tab Section -->
                <div class="dark:bg-neutral-700/50 flex gap-3 p-1">
                    <select v-model="selectedLanguage" @change="updateSelectedLanguage"
                        class="bg-white dark:bg-neutral-700 hover:bg-neutral-300 dark:hover:bg-neutral-600/60 border-none focus:border-none focus:outline-none ring-0 text-neutral-600 dark:text-neutral-100 py-0 rounded-md cursor-pointer"
                        >
                        <option selected value="cpp">C++</option>
                        <option value="php">PHP</option>
                        <option value="javascript">Javascript</option>
                    </select>
                    <Link
                        class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
                    <span class="text-green-500 text-sm">
                        <font-awesome-icon icon="code" />
                    </span>
                    <span class="text-sm text-neutral-600 dark:text-neutral-200">Code</span>
                    </Link>
                </div>

                <div class="flex-1">
                    <Editor :type="selectedLanguage" display-name="Code Block" @code-change="onChange" :key="selectedLanguage" />
                </div>

            </div>
        </pane>

        <pane size="20">
            <div
                class="border border-neutral-300 dark:border-neutral-700 rounded-lg bg-white dark:bg-neutral-800 h-full">
                Input/Output</div>
        </pane>
    </splitpanes>
</template>