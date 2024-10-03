<script setup>
import { ref } from 'vue'
import { usePage, Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import StudyPlanCard from '@/Components/Problem/StudyPlanCard.vue'
import Tag from '@/Components/Problem/Tag.vue'
import Topic from '@/Components/Problem/Topic.vue'
import Filter from '@/Components/Problem/Filter.vue'

import ImageOne from '@/images/course/1.jpeg'
import ImageTwo from '@/images/course/2.png'
import ImageThree from '@/images/course/3.png'

import amazon from '@/images/study-plan/amazon.png'
import javascript from '@/images/study-plan/javascript.png'
import leetcode75 from '@/images/study-plan/leetcode-75.png'
import pandas from '@/images/study-plan/pandas.png'
import topInterview from '@/images/study-plan/top-interview.png'
import sql from '@/images/study-plan/sql-50.png'


const props = defineProps({
    filters: Object
})

</script>

<template>
    <AppLayout>

        <Head title="Problems -" />
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

            <div class="sm:col-span-3 space-y-6">
                <!-- Courses -->
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 sm:col-span-3">

                    <a href="#">
                        <img class="rounded-lg" :src="ImageOne" alt="">
                    </a>

                    <a href="#">
                        <img class="rounded-lg" :src="ImageTwo" alt="">
                    </a>

                    <a href="#">
                        <img class="rounded-lg" :src="ImageThree" alt="">
                    </a>


                </div>

                <!-- Study Plan -->

                <div class="space-y-3">

                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Study Plan</h1>
                        <a href="#" class="text-blue-700 text-md">See All</a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">

                        <StudyPlanCard :img="topInterview" :title="'Top interview 150'"
                            :description="'Must do this list for interview'" />
                        <StudyPlanCard :img="leetcode75" :title="'Leetcode 75'"
                            :description="'Must do this list for interview'" />
                        <StudyPlanCard :img="sql" :title="'SQL 50'" :description="'Must do this list for interview'" />
                        <StudyPlanCard :img="pandas" :title="'Introduction to Pandas'"
                            :description="'Must do this list for interview'" />
                        <StudyPlanCard :img="javascript" :title="'30 Days of Javascript'"
                            :description="'Must do this list for interview'" />
                        <StudyPlanCard :img="amazon" :title="'Amazon Spring 23\' High Freequency'"
                            :description="'Must do this list for interview'" />
                    </div>
                </div>


                <!-- Tag -->

                <div class="flex flex-wrap gap-4">
                    <Tag :count="234" slug="">Array</Tag>
                    <Tag :count="234" slug="">String</Tag>
                    <Tag :count="234" slug="">Database </Tag>
                    <Tag :count="234" slug="">Hash Table</Tag>
                    <Tag :count="234" slug="">Pointer</Tag>

                </div>

                <!-- Topics -->

                <div class="flex gap-4 overflow-x-hidden">

                    <div
                        class="cursor-pointer flex items-center gap-3 bg-gray-700 hover:bg-gray-800 rounded-full px-3 py-2 text-gray-200 dark:hover:bg-gray-200 dark:bg-gray-300  dark:text-gray-900">
                        <div class="">
                            <font-awesome-icon icon="archive" />
                        </div>
                        <h6 class="text-nowrap">All Topics</h6>
                    </div>

                    <Topic logo="terminal">Algorithm</Topic>

                    <Topic logo="database">Database</Topic>


                </div>

                <!-- Filter Bar -->

                <Filter />


                <!-- Table List -->
                <div>
                    <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-sm font-thin text-gray-500  bg-gray-50 dark:bg-gray-800 dark:text-gray-400 border-b dark:border-gray-600">
                                <tr>
                                    <th scope="col" class=" px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Solution
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Acceptance
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Difficulty
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Freequency
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="n in 10"
                                    class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-md text-yellow-400">
                                            <font-awesome-icon icon="lock" />
                                        </span>
                                    </th>
                                    <td class="px-6 py-3 text-nowrap">
                                        Apple MacBook Pro 17"
                                    </td>
                                    <td class="px-6 py-3">
                                        <a href="#" class="text-blue-500 text-md"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"
                                                height="1em" fill="currentColor"
                                                class="text-blue dark:text-dark-blue h-5 w-5">
                                                <path
                                                    d="M15.207 11.293a1 1 0 010 1.414l-3.5 3.5a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L11 14.086l2.793-2.793a1 1 0 011.414 0z">
                                                </path>
                                                <path
                                                    d="M4 5a3 3 0 013-3h7.039a3 3 0 012.342 1.126l2.962 3.701A3 3 0 0120 8.702V19a3 3 0 01-3 3H7a3 3 0 01-3-3V5zm3-1a1 1 0 00-1 1v14a1 1 0 001 1h10a1 1 0 001-1V9h-3a2 2 0 01-2-2V4H7zm8 .6V7h1.92L15 4.6z">
                                                </path>
                                            </svg></a>
                                    </td>
                                    <td class="px-6 py-3">
                                        23432
                                    </td>
                                    <td class="px-6 py-3">
                                        <span class="text-green-500">Easy</span>
                                    </td>
                                    <td>
                                        freequency
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-between items-center mt-3">
                        <select class="border-none rounded-md dark:bg-gray-700 dark:text-gray-300 py-1.5"
                            action="20/Page">
                            <option selected value="20">20 / Page</option>
                            <option value="50">50 / Page</option>
                            <option value="100">100 / Page</option>
                        </select>



                        <nav aria-label="Page navigation example">
                            <ul class="flex items-center gap-2 h-8 text-sm">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>




            <!-- Sidebar content -->
            <div class="space-y-4">


                <div class="dark:bg-gray-700 rounded-md px-4 py-2 shadow-md">

                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-md text-semibold text-gray-600 dark:text-gray-300">Tranding Companies</h4>
                        <div class="flex gap-2 text-gray-600 dark:text-gray-300">
                            <span
                                class="size-8 flex items-center justify-center rounded-md shadow-sm bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 cursor-pointer">
                                <font-awesome-icon icon="angle-left" />
                            </span>

                            <span
                                class="size-8 flex items-center justify-center rounded-md shadow-sm bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 cursor-pointer">
                                <font-awesome-icon icon="angle-right" />
                            </span>
                        </div>
                    </div>


                    <div class="relative w-full flex items-center mb-4">
                        <input type="text"
                            class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-600 dark:text-gray-300 focus:bg-gray-200 dark:focus:bg-gray-500 focus:outline-none w-full h-auto pl-9 py-1.5"
                            placeholder="Search for a company">
                        <span class="absolute left-4 text-gray-400 dark:text-gray-400 ">
                            <font-awesome-icon icon="search" />
                        </span>
                    </div>



                    <div class="flex flex-wrap gap-2">
                        <div
                            class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-gray-300">Google</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                        </div>

                        <div
                            class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-gray-300">IBM</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                        </div>

                        <div
                            class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-gray-300">Meta</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </AppLayout>
</template>