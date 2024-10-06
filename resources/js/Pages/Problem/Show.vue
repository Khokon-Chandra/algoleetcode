<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Splitpanes, Pane } from 'splitpanes';
import 'splitpanes/dist/splitpanes.css';
import Playground from '@/Layouts/Playground.vue';
import MemoIcon from '@/Components/Icon/MemoIcon.vue';

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
                <div
                    class="h-full rounded-lg overflow-y-auto border border-gray-300 bg-white dark:border-gray-700 dark:bg-gray-800 shadow-sm">
                    <div class="dark:bg-gray-700 flex p-1">
                        <Link
                            class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-gray-200 dark:hover:bg-gray-600">
                        <span class="text-indigo-500">
                            <MemoIcon class="size-4 " />
                        </span>
                        <span class="text-sm text-gray-600 dark:text-gray-200">Description</span>
                        </Link>

                        <Link
                            class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-gray-200 dark:hover:bg-gray-600">
                        <span class="text-indigo-500">
                            <MemoIcon class="size-4 " />
                        </span>
                        <span class="text-sm text-gray-600 dark:text-gray-200">Submissions</span>
                        </Link>
                    </div>

                    <div class="p-4">
                        <!-- Title -->
                        <h1 class="text-2xl font-bold space-x-2 text-gray-600 dark:text-gray-200 mb-3">
                            <span>1.</span>
                            <span>Two Sum</span>
                        </h1>
                        <!-- Topics tags -->
                        <div class="flex gap-2 mb-3">
                            <span
                                class="text-sm font-thin text-teal-600 bg-gray-200 dark:bg-gray-700 rounded-full px-2">Easy</span>
                            <span
                                class="text-sm font-thin text-slate-600 dark:text-slate-200 bg-gray-200 dark:bg-gray-700 rounded-full px-2">Topics</span>
                        </div>
                        <!-- Description -->
                        <div class="mb-10">
                            <p class="text-gray-600 dark:text-gray-200">Given an array of integers nums and an integer
                                target, return indices of the two numbers
                                such that they add up to target.

                                You may assume that each input would have exactly one solution, and you may not use the
                                same element twice.

                                You can return the answer in any order.</p>
                        </div>

                        <!-- Example 1-->
                        <div class="mb-4">
                            <h5 class="text-lg text-bold text-gray-600 dark:text-gray-200 mb-3">Example 1.</h5>
                            <div class="border-l border-gray-300 dark:border-gray-500 px-3">
                                <!-- Input -->
                                <div class="flex gap-4">
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-200">Input:</h6>
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-400">nums = [2,7,11,15],
                                        target = 9</h6>
                                </div>
                                <!-- Output -->
                                <div class="flex gap-4">
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-200">Output:</h6>
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-400">[0,1]</h6>
                                </div>
                            </div>
                        </div>


                        <!-- Example 2-->
                        <div class="mb-4">
                            <h5 class="text-lg text-bold text-gray-600 dark:text-gray-200 mb-3">Example 2.</h5>
                            <div class="border-l border-gray-300 dark:border-gray-500 px-3">
                                <!-- Input -->
                                <div class="flex gap-4">
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-200">Input:</h6>
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-400">nums = [2,7,11,15],
                                        target = 9</h6>
                                </div>
                                <!-- Output -->
                                <div class="flex gap-4">
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-200">Output:</h6>
                                    <h6 class="text-lg text-bold text-gray-600 dark:text-gray-400">[0,1]</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Constraints -->
                        <div class="mb-8 mt-10">
                            <h5 class="text-lg text-bold text-gray-600 dark:text-gray-200 mb-3">Constraints:</h5>
                            <ul class="list-disc pl-10">
                                <li class=" text-gray-500">2 <= nums.length <=104</li>
                                <li class=" text-gray-500">-109 <= nums[i] <=109</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </pane>

            <!-- Right Pane: Code Editor -->
            <pane>
                <splitpanes horizontal>
                    <pane size="80">
                        <div
                            class="border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 h-full overflow-y-auto">

                            <!-- Tab Section -->
                            <div class="dark:bg-gray-700 flex gap-3 p-1">

                                <select
                                    class="bg-white dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 border-none focus:border-none focus:outline-none ring-0 text-gray-600 dark:text-gray-100 py-0 rounded-md cursor-pointer"
                                    name="" id="">
                                    <option value="1">C++</option>
                                    <option value="1">PHP</option>
                                    <option value="1">Javascript</option>
                                </select>




                                <Link
                                    class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-gray-200 dark:hover:bg-gray-600">
                                <span class="text-green-500 text-sm">
                                    <font-awesome-icon icon="code" />
                                </span>
                                <span class="text-sm text-gray-600 dark:text-gray-200">Code</span>
                                </Link>





                            </div>
                        </div>
                    </pane>

                    <pane size="20">
                        <div
                            class="border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 h-full">
                            Input/Output</div>
                    </pane>
                </splitpanes>
            </pane>
        </splitpanes>
    </Playground>
</template>
<style scoped>
.splitpanes--vertical {
    column-gap: 2px;
}

.splitpanes--horizontal {
    row-gap: 2px;
}
</style>