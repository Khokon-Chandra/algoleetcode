<script setup>
import { ref, computed } from 'vue';
import { usePage, router } from '@inertiajs/vue3';

const emit = defineEmits('update-problems');


const props = defineProps({
    tag: Object
})




const getFilterableTags = computed(() => {
    return usePage().props.filters.tags?.split(',') || [];
});



const selected = computed(() => {
    return getFilterableTags.value.includes(props.tag.slug);
});





const toggleTag = () => {

    let tags = null;

    if (getFilterableTags.value.includes(props.tag.slug)) {
        tags = getFilterableTags.value.filter(item => item !== props.tag.slug);
    } else {
        getFilterableTags.value.push(props.tag.slug);
        tags = getFilterableTags.value;
    }


    router.get(route('problems.index'), {
        ...usePage().props.filters,
        tags: tags.join(','),
        page: 1,
    }, {
        preserveScroll: true,
        preserveState: true,
        onSuccess: (page) => {
            emit('update-problems', page.props.problems);
        }
    })
}





</script>

<template>


    <div @click="toggleTag()" :class="{
        'bg-blue-600 rounded-full p-1': selected
    }" class="text-nowrap group space-x-1 cursor-pointer">

        <span :class="{
            'text-white group-hover:text-white': selected,
            'dark:text-neutral-300 group-hover:text-blue-500': !selected
        }" class="text-sm ">
            {{ tag.name }}
        </span>

        <span :class="{
            'bg-blue-900 text-white': selected,
            'bg-neutral-200 dark:bg-neutral-800 group-hover:text-blue-500 group-hover:bg-blue-100 dark:group-hover:bg-neutral-700  text-neutral-500 dark:text-neutral-400': !selected,
        }" class="rounded-lg px-1 py-0 text-sm font-thin">{{
            tag.problems_count }}</span>
    </div>

</template>