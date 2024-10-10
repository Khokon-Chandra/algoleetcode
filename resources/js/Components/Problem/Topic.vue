<script setup>
import { ref } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const props = defineProps({
    data: { type: Object }
})




</script>

<template>

    <Link preserve-scroll :href="route('problems.index', { ...$page.props.filters, topic: data.slug })" :class="{
        'text-neutral-200 bg-neutral-900 dark:hover:bg-neutral-200 dark:bg-neutral-300  dark:text-neutral-900': $page.props.filters.topic == data.slug,
        ' bg-neutral-100 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800  text-neutral-600 dark:text-neutral-300': $page.props.filters.topic !== data.slug

    }" class="cursor-pointer flex items-center gap-3 rounded-full px-3 py-2">
    <div class="">
        <font-awesome-icon :icon="['fas', 'database']" />
    </div>
    <h6 class="text-nowrap">
        {{ data.name }}
    </h6>
    </Link>
</template>