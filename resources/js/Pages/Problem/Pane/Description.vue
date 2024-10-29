<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const problem = usePage().props.problem;

const isTagCollapse = ref(false);

</script>

<template>
    <div class="h-full grid grid-rows-[auto_1fr] rounded-lg bg-white dark:bg-neutral-800 shadow-sm">

        <div class="dark:bg-neutral-700/50 flex p-1">
            <Link preserve-state="true" :href="route('problems.show', problem.slug)"
                class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
            <span class="text-blue-400">
                <font-awesome-icon icon="note-sticky" />
            </span>
            <span class="text-sm text-neutral-600 dark:text-neutral-200">Description</span>
            </Link>

            <Link preserve-state="true" :href="route('problems.submissions', problem.slug)"
                class="px-2 py-1 rounded-md flex justify-between items-center gap-2 hover:bg-neutral-200 dark:hover:bg-neutral-700">
            <span class="text-blue-400">
                <font-awesome-icon icon="note-sticky" />
            </span>
            <span class="text-sm text-neutral-600 dark:text-neutral-200">Submissions</span>
            </Link>
        </div>

        <div class="h-screen p-4 overflow-y-auto  custom-scrollbar">
            <!-- Title -->
            <h1 class="text-2xl font-bold space-x-2 text-neutral-600 dark:text-neutral-200 mb-3">
                <span>{{ problem.id }}.</span>
                <span class="capitalize text-wrap">{{ problem.title }}</span>
            </h1>
            <!-- Topics tags -->
            <div class="flex gap-2 mb-3">
                <span :class="{
                    ' text-green-500': problem.difficulty == 'easy',
                    ' text-yellow-500': problem.difficulty == 'medium',
                    ' text-red-600': problem.difficulty == 'hard',
                }" class="text-sm font-thin bg-neutral-200 dark:bg-neutral-700/50 rounded-full px-2 capitalize">{{
                    problem.difficulty }}</span>
                <span
                    class="text-sm font-thin text-slate-600 dark:text-slate-300 bg-neutral-200 dark:bg-neutral-700/50 rounded-full px-2 capitalize">{{
                        problem.topic.name }}</span>
            </div>
            <!-- Description -->
            <div class="mb-10">
                <p class="text-neutral-600 dark:text-neutral-200 text-wrap">{{ problem.description }}</p>
            </div>

            <!-- Example 1-->
            <div class="mb-4" v-for="(example, index) in problem.examples" :key="index">
                <h5 class="text-lg text-bold text-neutral-600 dark:text-neutral-200 mb-3">Example {{ index + 1 }}.</h5>
                <div class="border-l border-neutral-300 dark:border-neutral-500 px-3">
                    <!-- Input -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Input:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">{{ example.input }}</h6>
                    </div>
                    <!-- Output -->
                    <div class="flex gap-4">
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Output:</h6>
                        <h6 class="text-lg text-bold text-neutral-600 dark:text-neutral-400">{{ example.output }}</h6>
                    </div>
                </div>
            </div>


            <!-- Constraints -->
            <div class="mb-8 mt-10">
                <h5 class="text-lg text-bold text-neutral-600 dark:text-neutral-200 mb-3">Constraints:</h5>
                <ul class="list-disc pl-10" v-for="(constraint, index) in problem.constraints" :key="index">
                    <li class=" text-neutral-500">{{ constraint.value }}</li>
                </ul>
            </div>


            <div class="bg-neutral-100 dark:bg-neutral-700/20 rounded-lg">
                <div @click="isTagCollapse = ! isTagCollapse" class="cursor-pointer p-4 flex justify-between items-center ">
                    <h4 class="text-lg text-bold text-neutral-600 dark:text-neutral-200">Tags</h4>
                    <font-awesome-icon class="text-neutral-600 dark:text-neutral-200" icon="angle-down" />
                </div>
                <div v-if="isTagCollapse" class="flex gap-4 flex-wrap p-4">
                    <span v-for="tag in problem.tags.slice(0, 20)" :key="tag.id"
                        class="text-sm font-thin bg-neutral-200 dark:bg-neutral-700/50 rounded-full px-2 capitalize text-neutral-500">
                        {{ tag.name }}
                    </span>
                </div>
            </div>


            <div class="h-48"></div>

        </div>
    </div>
</template>
<style scoped>
/* Custom scrollbar styles */
.custom-scrollbar::-webkit-scrollbar {
    width: 5px;
    /* Set the width of the scrollbar */
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: #73706c;
    /* Tailwind `neutral-500` (Scrollbar thumb color) */
    border-radius: 8px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background-color: #524f4c;
    /* Tailwind `neutral-700` (Scrollbar track color) */
}
</style>