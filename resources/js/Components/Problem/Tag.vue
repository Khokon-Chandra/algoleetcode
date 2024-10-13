<script setup>
import { ref } from 'vue';
import { Link, usePage, router } from '@inertiajs/vue3';

const props = defineProps({
    count: Number,
    slug: String,
})


const page = usePage();

const selected = ref(false);

const selectedTags = page.props.filters.tags?.split(',') || [];

if (selectedTags.includes(props.slug)) {
    selected.value = true;
}



const toggleTag = (slug) => {
    let tags = null;


    if (selectedTags.includes(slug)) {
        tags = selectedTags.filter(item => item !== slug);
    } else {
        selectedTags.push(slug);
        tags = selectedTags;
    }


    router.get(route('problems.index'), {
        ...page.props.filters,
        tags: tags.join(',')
    }, {
        preserveScroll: true
    })
}


</script>

<template>


    <div  @click="toggleTag(slug)" :class="{
        'bg-blue-600 rounded-full p-1': selected
    }" class="text-nowrap group space-x-1 cursor-pointer">

        <span :class="{
            'text-white group-hover:text-white': selected,
            'dark:text-neutral-300 group-hover:text-blue-500': !selected
        }" class="text-sm ">
            <slot />
        </span>

        <span :class="{
            'bg-blue-900 text-white': selected,
            'bg-neutral-200 dark:bg-neutral-800 group-hover:text-blue-500 group-hover:bg-blue-100 dark:group-hover:bg-neutral-700  text-neutral-500 dark:text-neutral-400': !selected,
        }"
            class="rounded-lg px-1 py-0 text-sm font-thin">{{
                count }}</span>
    </div>

</template>