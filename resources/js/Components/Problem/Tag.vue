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
    <span class="text-sm hover:text-blue-500 dark:text-gray-300 group-hover:text-blue-500">
        <slot />
    </span>
    <span
        class="bg-gray-200 dark:bg-gray-700 group-hover:text-blue-500 group-hover:bg-blue-100 dark:group-hover:bg-gray-700 rounded-lg px-1 py-0 text-sm text-gray-500 dark:text-gray-400">{{ count }}</span>
</Link>
</template>