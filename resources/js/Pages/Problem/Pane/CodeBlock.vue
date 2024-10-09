<script setup>
import { ref, onBeforeMount } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import { Splitpanes, Pane } from 'splitpanes';
import 'splitpanes/dist/splitpanes.css';
import { useLocalStorage } from "@vueuse/core";
import Editor from '@/Components/Problem/Editor.vue';


const testCase = ref(true);

const selectedLanguage = useLocalStorage("selected-language", "cpp");

const onChange = (payload) => {

}

const isDarkMode = ref(false);

onBeforeMount(() => {
    // Detect system theme preference
    const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

    // Set the initial theme
    isDarkMode.value = mediaQuery.matches;

    // Listen for changes in system theme preference
    mediaQuery.addEventListener('change', (e) => {
        isDarkMode.value = e.matches;
    });
});

</script>

<template>
    <splitpanes :horizontal="true">
        <pane size="80">
            <div
                class="flex flex-col border border-neutral-300 dark:border-neutral-700 rounded-lg bg-white dark:bg-neutral-800 h-full overflow-hidden">

                <!-- Tab Section -->
                <div class="dark:bg-neutral-700/50 flex gap-3 p-1">
                    <select v-model="selectedLanguage"
                        class="bg-white dark:bg-neutral-700 hover:bg-neutral-300 dark:hover:bg-neutral-600/60 border-none focus:border-none focus:outline-none ring-0 text-neutral-600 dark:text-neutral-100 py-0 rounded-md cursor-pointer">
                        <option selected value="cpp">C++</option>
                        <option value="php">PHP</option>
                        <option value="javascript">Javascript</option>
                    </select>
                    <div
                        class="cursor-pointer px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
                        <span class="text-green-500 text-sm">
                            <font-awesome-icon icon="code" />
                        </span>
                        <span class="text-sm text-neutral-600 dark:text-neutral-200">Code</span>
                    </div>
                </div>

                <div class="flex-1">
                    <Editor :type="selectedLanguage" :theme="isDarkMode ? 'vs-dark' : 'vs-light'"
                        @code-change="onChange" :key="selectedLanguage" />
                </div>

            </div>
        </pane>

        <pane size="20">
            <div
                class="flex flex-col border border-neutral-300 dark:border-neutral-700 rounded-lg bg-white dark:bg-neutral-800 h-full overflow-hidden">

                <div class="dark:bg-neutral-700/50 flex gap-3 p-1">

                    <div @click="testCase = true"
                        class="cursor-pointer px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
                        <font-awesome-icon class="text-green-500 text-sm" icon="check-square" />
                        <span
                            :class="testCase ? 'font-medium text-neutral-900 dark:text-neutral-50' : 'text-neutral-600 dark:text-neutral-400'"
                            class="text-sm text-neutral-600">Testcase</span>
                    </div>

                    <div @click="testCase = false"
                        class="cursor-pointer px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
                        <font-awesome-icon class="text-green-500 text-sm" icon="terminal" />
                        <span
                            :class="testCase == false ? 'font-medium text-neutral-900 dark:text-neutral-50' : 'text-neutral-600 dark:text-neutral-400'"
                            class="text-sm">Test Result</span>
                    </div>
                </div>

                <div class="relative flex-1">
                    <div v-if="testCase" class="h-full w-full p-4 absolute top-0  overflow-y-auto">
                        One
                    </div>
                    <div v-else class="h-full w-full p-4 absolute top-0 overflow-y-auto">Two</div>
                </div>
            </div>
        </pane>
    </splitpanes>
</template>