<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    count:{
        type:Number
    }
})
</script>

<template>
    
<Link href="#" class="text-nowrap group space-x-1">
    <span class="text-sm hover:text-blue-500 dark:text-neutral-300 group-hover:text-blue-500">
        <slot />
    </span>
    <span
        class="bg-neutral-200 dark:bg-neutral-800 group-hover:text-blue-500 group-hover:bg-blue-100 dark:group-hover:bg-neutral-700 rounded-lg px-1 py-0 text-sm font-thin text-neutral-500 dark:text-neutral-400">{{ count }}</span>
</Link>
</template>