<script setup>
import { computed } from 'vue';
import { usePage, router } from '@inertiajs/vue3';

const props = defineProps({
    data: { type: Object }
})


const emit = defineEmits("update-problems");


const loadData = () => {
    router.get(route('problems.index'), { ...usePage().props.filters, topic: props.data.slug, page: 1 }, {
        preserveScroll: true,
        preserveState: true,
        onSuccess: (page) => {
            emit("update-problems", page.props.problems);
        }
    })
}


const activeInactiveClass = computed(() => {
    let active = usePage().props.filters.topic == props.data.slug

    return active ? 'text-neutral-200 bg-neutral-900 dark:hover:bg-neutral-200 dark:bg-neutral-300  dark:text-neutral-900' :
        ' bg-neutral-100 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800  text-neutral-600 dark:text-neutral-300';
})


</script>

<template>

    <div @click="loadData" :class="activeInactiveClass"
        class="cursor-pointer flex items-center gap-3 rounded-full px-3 py-2">
        <div class="">
            <font-awesome-icon :icon="['fas', 'database']" />
        </div>
        <h6 class="text-nowrap">
            {{ data.name }}
        </h6>
    </div>
</template>