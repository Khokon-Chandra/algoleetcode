<script setup>

import { Link } from '@inertiajs/vue3';

defineProps({
    img: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
    }
});
</script>

<template>
    <Link href="#"
        class="p-2 rounded-lg border border-neutral-200 dark:border-neutral-800 dark:bg-neutral-800 flex gap-4 shadow-sm hover:shadow-2xl transition duration-200 ease-linear">
    <img class="shrink-0 size-[72px] rounded-lg" :src="img" alt="study plan">
    <div class="flex flex-col items-start justify-center overflow-hidden">
        <h5 class="text-black text-medium dark:text-neutral-300">{{ title }}</h5>
        <p class="text-xs .text-lc-text-tertiary text-nowrap dark:text-neutral-400">{{ description }}</p>
    </div>
    </Link>
</template>