<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    logo: { type: String }
})
</script>

<template>

    <Link href="javascript:void(0)"
        class="cursor-pointer flex items-center gap-3 bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700 rounded-full px-3 py-2 text-gray-600 dark:text-gray-300">
    <div class="">
       <font-awesome-icon :icon="['fas',logo]"/>
    </div>
    <h6 class="text-nowrap">
        <slot />
    </h6>
    </Link>
</template>