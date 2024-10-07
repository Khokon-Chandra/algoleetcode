<script setup>
import { Link } from '@inertiajs/vue3';


</script>

<template>
    <div class="h-full grid grid-rows-[auto_1fr] rounded-lg bg-white dark:bg-neutral-800 shadow-sm">

        <div class="dark:bg-neutral-700/50 flex p-1">
            <Link
                class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
            <span class="text-indigo-500">
                <font-awesome-icon icon="note"/>
            </span>
            <span class="text-sm text-neutral-600 dark:text-neutral-200">Description</span>
            </Link>

            <Link
                class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
            <span class="text-indigo-500">
                <font-awesome-icon icon="note"/>
            </span>
            <span class="text-sm text-neutral-600 dark:text-neutral-200">Submissions</span>
            </Link>
        </div>

        <div class="p-4 overflow-y-auto">
            <!-- Title -->
            <h1 class="text-2xl font-bold space-x-2 text-neutral-600 dark:text-neutral-200 mb-3">
                <span>1.</span>
                <span>Two Sum</span>
            </h1>
            <!-- Topics tags -->
            <div class="flex gap-2 mb-3">
                <span
                    class="text-sm font-thin text-teal-600 bg-neutral-200 dark:bg-neutral-700 rounded-full px-2">Easy</span>
                <span
                    class="text-sm font-thin text-slate-600 dark:text-slate-200 bg-neutral-200 dark:bg-neutral-700 rounded-full px-2">Topics</span>
            </div>
            <!-- Description -->
            <div class="mb-10">
                <p class="text-neutral-600 dark:text-neutral-200">Given an array of integers nums and an integer
                    target, return indices of the two numbers
                    such that they add up to target.

                    You may assume that each input would have exactly one solution, and you may not use the
                    same element twice.

                    You can return the answer in any order.</p>
            </div>

            <!-- Example 1-->
            <div class="mb-4">
                <h5 class="text-lg text-bold text-neutral-600 dark:text-neutral-200 mb-3">Example 1.</h5>
                <div class="border-l border-neutral-300 dark:border-neutral-500 px-3">
                    <!-- Input -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Input:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">nums = [2,7,11,15],
                            target = 9</h6>
                    </div>
                    <!-- Output -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Output:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">[0,1]</h6>
                    </div>
                </div>
            </div>


            <!-- Example 2-->
            <div class="mb-4">
                <h5 class="text-lg text-bold text-neutral-600 dark:text-neutral-200 mb-3">Example 2.</h5>
                <div class="border-l border-neutral-300 dark:border-neutral-500 px-3">
                    <!-- Input -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Input:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">nums = [2,7,11,15],
                            target = 9</h6>
                    </div>
                    <!-- Output -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Output:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">[0,1]</h6>
                    </div>
                </div>
            </div>

            <!-- Constraints -->
            <div class="mb-8 mt-10">
                <h5 class="text-lg text-bold text-neutral-600 dark:text-neutral-200 mb-3">Constraints:</h5>
                <ul class="list-disc pl-10">
                    <li class=" text-neutral-500">2 <= nums.length <=104</li>
                    <li class=" text-neutral-500">-109 <= nums[i] <=109</li>
                </ul>
            </div>
        </div>
    </div>
</template>