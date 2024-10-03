<script setup>
import { ref } from 'vue';
import { router, useForm } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '../DropdownLink.vue';

const form = useForm({
    search: ""
})


const search = () => {
    router.get(route('problems.index'), { search: form.search })
}

</script>

<template>
    <div class="flex flex-col gap-4">
        <div class="flex w-full flex-wrap gap-2">

            <!-- <DropdownFilter /> -->

            <!-- Lists -->
            <div class="flex-1">
                <Dropdown align="left">
                    <template #trigger>
                        <span class="inline-flex rounded-md w-full">
                            <button type="button"
                                class="w-full inline-flex items-center justify-between gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                Lists
                                <font-awesome-icon icon="angle-down" />
                            </button>
                        </span>
                    </template>

                    <template #content>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">LeetCode curated Algo 170</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>



                    </template>
                </Dropdown>
            </div>

            <!-- Difficulty -->
            <div class="flex-1">
                <Dropdown align="left">
                    <template #trigger>
                        <span class="inline-flex rounded-md w-full">
                            <button type="button"
                                class="w-full inline-flex items-center justify-between gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                Difficulty
                                <font-awesome-icon icon="angle-down" />
                            </button>
                        </span>
                    </template>

                    <template #content>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Easy</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Medium</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Hard</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>



                    </template>
                </Dropdown>
            </div>

            <!-- Status -->
            <div class="flex-1">
                <Dropdown align="left">
                    <template #trigger>
                        <span class="inline-flex rounded-md w-full">
                            <button type="button"
                                class="w-full inline-flex items-center justify-between gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                Status
                                <font-awesome-icon icon="angle-down" />
                            </button>
                        </span>
                    </template>

                    <template #content>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Todo</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>


                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Solved</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>

                        <DropdownLink
                            class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                            href="">
                            <span class="text-nowrap">Attempted</span>
                            <font-awesome-icon class="text-green-500" icon="check" />
                        </DropdownLink>



                    </template>
                </Dropdown>
            </div>


            <!-- Tags -->
            <div class="flex-1">
                <Dropdown align="left" :hide-content="false">
                    <template #trigger>
                        <span class="inline-flex rounded-md w-full">
                            <button type="button"
                                class="w-full inline-flex items-center justify-between gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                Tags
                                <font-awesome-icon icon="angle-down" />
                            </button>
                        </span>
                    </template>

                    <template #content>

                        <div class="w-[300px] space-y-4 p-2">

                            <div class="relative w-min[250px] flex items-center">
                                <input type="text"
                                    class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-600 dark:text-gray-300 dark:focus:bg-gray-500 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5 placeholder:text-gray-400 placeholder:text-sm placeholder:font-thin"
                                    placeholder="filter topics">
                                <span class="absolute left-4 text-gray-400 dark:text-gray-300 ">
                                    <font-awesome-icon icon="search" />
                                </span>
                            </div>


                            <div class="flex flex-wrap gap-2">
                                <a href="javascript:void(0)"
                                    class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Array</a>
                                <a href="javascript:void(0)"
                                    class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">String</a>
                                <a href="javascript:void(0)"
                                    class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Hash
                                    Table</a>
                                <a href="javascript:void(0)"
                                    class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Database</a>
                            </div>

                        </div>



                    </template>
                </Dropdown>
            </div>



            <div class="flex min-w-[300px] flex-[4_4_0%] gap-2">
                <!-- Search bar -->
                <div class="flex-1">
                    <div class="w-full relative flex items-center">
                        <input type="text"
                            class="block w-full relative border-none rounded-md bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:focus:bg-gray-600 focus:bg-gray-200 focus:outline-none h-auto pl-9 py-1.5 placeholder:text-gray-400 placeholder:text-sm placeholder:font-thin"
                            placeholder="Search Questions">
                        <span class="absolute left-4 text-gray-400 dark:text-gray-500 ">
                            <font-awesome-icon icon="search" />
                        </span>
                    </div>
                </div>


                <!-- Setting gear button -->
                <div class="relative">
                    <Dropdown align="left">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="text-lg inline-flex items-center gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                    <font-awesome-icon icon="cog" />
                                </button>
                            </span>
                        </template>

                        <template #content>

                            <DropdownLink
                                class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                                href="">
                                <span class="text-nowrap">LeetCode curated Algo 170</span>
                                <font-awesome-icon class="text-green-500" icon="check" />
                            </DropdownLink>



                        </template>
                    </Dropdown>
                </div>


                <!-- Pick One randomly -->
                <div class="ml-auto inline-flex shrink-0 items-center pl-2.5 cursor-pointer">
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-full shadow-md from-green-500 to-green-800 dark:to-dark-green-s bg-gradient-to-b shadow-fixed-green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em"
                            fill="currentColor" class="h-[18px] w-[18px] fill-none stroke-current text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.398 18.296H5.38a3.6 3.6 0 002.93-1.508l1.023-1.433m11.522-9.71h-2.98a3.6 3.6 0 00-2.93 1.507l-1.146 1.603m5.298-5.747l2.502 2.636-2.502 2.637m0 7.438l2.502 2.636-2.502 2.637M2.398 6.052H5.38a3.6 3.6 0 012.93 1.507l6.635 9.289a3.6 3.6 0 002.93 1.507h2.98">
                            </path>
                        </svg>
                    </span>
                    <span class="text-green-500 dark:text-dark-green-s hidden pl-2.5 md:inline">Pick One</span>
                </div>
            </div>


        </div>

        <div class="flex flex-wrap gap-2">
            <div
                class="flex gap-4 justify-between items-center bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded-lg text-gray-500 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300">
                <span class="text-xs">Hard problem</span>
                <span
                    class="cursor-pointer text-sm rounded-full px-1 py-0 bg-gray-300 text-gray-50 dark:bg-gray-600 dark:text-gray-800">
                    <font-awesome-icon icon="close" />
                </span>
            </div>

            <div
                class="flex gap-4 justify-between items-center bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded-lg text-gray-500 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300">
                <span class="text-xs">Hard problem</span>
                <span
                    class="cursor-pointer text-sm rounded-full px-1 py-0 bg-gray-300 text-gray-50 dark:bg-gray-600 dark:text-gray-800">
                    <font-awesome-icon icon="close" />
                </span>
            </div>

        </div>

    </div>


</template>