<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import DefaultAvatarImage from '@/images/default_avatar.jpg';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    discussion: Object
})
</script>
<template>
    <AppLayout>
        <div class="space-y-6">


            <div class="bg-white dark:bg-neutral-800 rounded-md shadow-lg p-4 space-y-4">

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col gap-3 items-center p-1">
                        <img class="size-8 rounded-full ring ring-gray-300" :src="DefaultAvatarImage" alt="user image">

                        <span class="text-nowrap dark:text-neutral-400">{{ discussion.user.name }}</span>
                    </div>
                    <div class="">
                        <h1 class="text-2xl font-bold text-neutral-600 dark:text-neutral-300 border-b mb-4 pb-2">{{ discussion.title }}</h1>

                        <p class="text-md text-neutral-600 dark:text-neutral-300">{{ discussion.description }}</p>



                        <div class="mt-16">
                            <div class="mb-4">
                                <span class="dark:text-neutral-300">Comments: 20</span>
                            </div>


                            <textarea class="w-full bg-transparent dark:text-neutral-400 rounded-md" placeholder="Type your comments here"></textarea>
                            <div class="w-full flex justify-end p-1">
                                <primary-button>Post</primary-button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </AppLayout>
</template>