<script setup>
import { ref } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import BreadCumbar from '@/Components/BreadCumbar.vue';
import Card from '@/Components/Card.vue';
import Pagination from '@/Components/Pagination.vue';
import moment from 'moment';
import ConfirmModal from '@/Components/ConfirmModal.vue';
import { reactive } from 'vue';
import { initModals } from 'flowbite';

import Create from './Create.vue';

import Edit from './Edit.vue';

const props = defineProps({
    tags: Object,
})

const editableTag = ref({});

const delay = ref(null);

const searchInput = ref(usePage().props.request.search || '');

const alert = reactive({
    success: '',
    error: ''
});

const deletableId = ref(null);

const serialNumber = (index) => {
    return (props.tags.current_page - 1) * props.tags.per_page + index + 1;
}

const formatDate = (date) => {
    return moment(date).format('DD MMMM YYYY');
}


const deleteTag = () => {
    router.delete(route('admin.tags.destroy', deletableId.value), deletableId.value);
}


const pushTags = (tags) => {
    props.tags = tags;
}


const filter = () => {

    if (delay.value) clearTimeout(delay.value);
    delay.value = setTimeout(() => {
        router.get(route('admin.tags.index'), { search: searchInput.value, page: 1 }, {
            preserveScroll: true,
            preserveState: true,
            onSuccess: (data) => {
                props.problems = data.tags
            }
        })
    }, 400);


}

</script>
<template>
    <AdminLayout>

        <BreadCumbar>
            <a href="#"
                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tag
                list</a>
        </BreadCumbar>


        <ConfirmModal @delete-problem="deleteTag" />

        <Create @update-tags="pushTags(tags)" />

        <Edit @update-tags="pushTags(tags)" :tag="editableTag" />


        <Card>

            <div class="p-4 flex justify-between items-center">
                <div>
                    <input type="search" @input="filter" v-model="searchInput"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search by tag name" />
                </div>

                <div>
                    <button type="button" data-modal-target="create-tag-modal" data-modal-toggle="create-tag-modal"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                        <font-awesome-icon icon="plus" />
                        Add New
                    </button>

                </div>
            </div>



            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>

                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Problem Count
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(tag, index) in tags.data" :key="tag.id"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-4 py-4">{{ serialNumber(index) }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ tag.name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ tag.problems_count }}
                            </td>


                            <td class="px-6 py-4">
                                {{ formatDate(tag.created_at) }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <button type="button" title="Edit" @click="editableTag = tag"
                                        data-modal-target="update-tag-modal" data-modal-toggle="update-tag-modal"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <font-awesome-icon icon="pencil-alt" />
                                    </button>

                                    <button type="button" title="Delete" data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal" @click="deletableId = tag.id"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <font-awesome-icon icon="close" />
                                    </button>


                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="mb-4 mt-6 flex items-center justify-center">
                <Pagination :links="tags.links" />
            </div>
        </Card>
    </AdminLayout>
</template>