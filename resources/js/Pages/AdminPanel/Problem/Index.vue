<script setup>
import { ref, onMounted } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import BreadCumbar from '@/Components/BreadCumbar.vue';
import Card from '@/Components/Card.vue';
import Pagination from '@/Components/Pagination.vue';
import ToastSuccess from '@/Components/ToastSuccess.vue';
import moment from 'moment';


const props = defineProps({
    problems: Object,
})


const serialNumber = (index) => {
    return (props.problems.current_page - 1) * props.problems.per_page + index + 1;
}

const formatDate = (date) => {
    return moment(date).format('DD MMMM YYYY');
}

</script>
<template>
    <AdminLayout>

        <BreadCumbar>
            <a href="#"
                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Problems</a>
        </BreadCumbar>


        <ToastSuccess v-if="$page.props.success" :message="$page.props.success" />



        <Card>

            <div class="p-4 flex justify-between items-center">
                <div>
                    <input type="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search by question" />
                </div>

                <div>
                    <button @click="router.get(route('admin.problems.create'))" type="button"
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
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acceptance
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Difficulty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(problem, index) in problems.data" :key="problem.id"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-4 py-4">{{ serialNumber(index) }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <Link :href="route('problems.show', problem.slug)">{{ problem.title }}</Link>
                            </th>
                            <td class="px-6 py-4">
                                {{ problem.acceptance }}
                            </td>
                            <td class="px-6 py-4">
                                {{ problem.difficulty }}
                            </td>

                            <td class="px-6 py-4">
                                {{ formatDate(problem.created_at) }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <font-awesome-icon icon="pencil-alt" />
                                    </button>

                                    <button type="button"
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
                <Pagination :links="problems.links" />
            </div>
        </Card>
    </AdminLayout>
</template>