<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import DefaultAvatarImage from '@/images/default_avatar.jpg';

const props = defineProps({
    types: Object,
    selectedType: String,
    discussions: Object
})
</script>
<template>
    <AppLayout>
        <div class="space-y-6">


            <div class="flex gap-4 overflow-x-hidden">
                <Link :href="route('discussions.index', item.slug)" v-for="item in types" :key="item.id" :class="{
                    'bg-slate-700 text-white': item.slug === selectedType,
                    ' bg-white dark:bg-neutral-800 text-neutral-500 dark:text-neutral-500': item.slug !== selectedType
                }" class="p-4 shadow-md h-18 flex items-center justify-center rounded-sm">
                <h1 class=" text-lg font-bold">{{ item.name }}</h1>
                </Link>
            </div>



            <div class="bg-white dark:bg-neutral-800 rounded-md shadow-lg p-4">


                <div v-for="discuss in discussions.data" :key="discuss.id"
                    class="flex items-center gap-4  border-b border-b-neutral-300 dark:border-b-neutral-700/50">
                    <div>
                        <img class="size-8 rounded-full ring ring-gray-300" :src="DefaultAvatarImage" alt="user image">
                    </div>
                    <div class="mb-3 flex-1 space-y-2">
                        <Link :href="route('discussions.show', { type_slug: selectedType, slug: discuss.slug })"
                            class="text-lg text-neutral-600 dark:text-neutral-300 capitalize">{{ discuss.title }}
                        </Link>
                        <div class="text-xs text-neutral-500 flex-col md:flex-row items-center gap-4">
                            <span title="Username">Username</span> |
                            <span>Created At August 6, 2019 5:16 PM</span> |
                            <span>Last Replay August 25, 2029 10:09</span>
                        </div>
                    </div>

                    <div class="ml-auto text-neutral-600 dark:text-neutral-400">
                        <font-awesome-icon icon="caret-up" />
                        {{ discuss.vote }}
                    </div>
                </div>

            </div>

            <div class="flex items-center justify-center">
                <Pagination :links="discussions.links" />
            </div>


        </div>
    </AppLayout>
</template>