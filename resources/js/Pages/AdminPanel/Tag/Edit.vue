<script setup>

import { ref, onMounted } from 'vue';
import { initModals, Modal } from 'flowbite';
import { router, usePage } from '@inertiajs/vue3';


const name = ref(null);

const errors = usePage().props.errors || {};


const props = defineProps({
    tag: Object,
})

const emit = defineEmits('update-tags');


const submitForm = () => {
    router.put(route('admin.tags.update', props.tag.id), { name: props.tag.name }, {
        preserveState: true,
        onError: (error) => {
            errors.name = error.name;
        },
        onSuccess: (data) => {
            const $targetEl = document.getElementById('update-tag-modal');
            const modal = new Modal($targetEl);
            modal.hide();
            emit('update-tags', data.tags);
        }
    });
}


onMounted(() => {
    initModals();
})

</script>

<template>



    <!-- Main modal -->
    <div id="update-tag-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Update Tag
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="update-tag-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="space-y-4" action="#">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag
                                name</label>
                            <input type="name" name="name" id="name" v-model="tag.name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="tag name" required />
                            <p v-if="errors.name" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ errors.name
                                }}</p>
                        </div>

                        <button type="submit" @click="submitForm"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                            Tag</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</template>