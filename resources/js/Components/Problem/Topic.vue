<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    logo: { type: String }
})
</script>

<template>

    <Link href="javascript:void(0)"
        class="cursor-pointer flex items-center gap-3 bg-neutral-100 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800 rounded-full px-3 py-2 text-neutral-600 dark:text-neutral-300">
    <div class="">
       <font-awesome-icon :icon="['fas',logo]"/>
    </div>
    <h6 class="text-nowrap">
        <slot />
    </h6>
    </Link>
</template>