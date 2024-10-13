<script setup>
import { ref } from 'vue'
import { usePage, Head, Link, router } from '@inertiajs/vue3'
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

import Pagination from '@/Components/Pagination.vue'

const tagCollapse = ref(false);

const props = defineProps({
    filters: Object,
    tags: Object,
    topics: Object,
    problems: Object
})


const scrollSection = ref(null);
const canScrollLeft = ref(false);
const canScrollRight = ref(true);

const range = ref(props.filters.range || 10);

const checkScrollPosition = () => {

    if (!scrollSection.value) {

        return false;
    }

    const maxScrollLeft =
        scrollSection.value.scrollWidth - scrollSection.value.clientWidth;

    if (scrollSection.value.scrollLeft === maxScrollLeft) {
        canScrollRight.value = false;
        canScrollLeft.value = true;
    }

    if (scrollSection.value.scrollLeft === 0) {
        canScrollRight.value = true;
        canScrollLeft.value = false;
    }

};

const scrollLeft = () => {
    if (scrollSection.value) {
        scrollSection.value.scrollBy({ left: -100, behavior: 'smooth' });
    }
};

const scrollRight = () => {
    if (scrollSection.value) {
        scrollSection.value.scrollBy({ left: 100, behavior: 'smooth' });
    }
};


const changeRange = () => {
    let params = { ...props.filters, range: range.value };
    router.get(route('problems.index'), params, {
        preserveScroll: true
    })
}

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
                        <h1 class="text-xl font-semibold text-neutral-700 dark:text-neutral-300">Study Plan</h1>
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

                <div>
                    <div v-if="tagCollapse == false" class="flex flex-wrap gap-4">
                        <Tag v-for="tag in tags.slice(0, 8)" :key="tag.id" :count="tag.problems_count" :slug="tag.slug">
                            {{ tag.name }}
                        </Tag>

                        <span @click="tagCollapse = true"
                            class="ml-auto text-sm text-neutral-600 dark:text-neutral-300 cursor-pointer">Expand
                            <font-awesome-icon icon="angles-down" /></span>
                    </div>

                    <div v-else class="flex flex-wrap gap-4">
                        <Tag v-for="tag in tags" :key="tag.id" :count="tag.problems_count" :slug="tag.slug">
                            {{ tag.name }}
                        </Tag>
                        <span @click="tagCollapse = false"
                            class="ml-auto text-sm text-neutral-600 dark:text-neutral-300 cursor-pointer">Collapse
                            <font-awesome-icon icon="angles-up" /></span>

                    </div>
                </div>

                <!-- Topics -->

                <div class="flex justify-between items-center">
                    <div ref="scrollSection" @scroll="checkScrollPosition"
                        class="flex gap-4 w-full overflow-x-auto scroll-smooth scrollbar-hide">

                        <Link preserve-scroll :href="route('problems.index', { ...$page.props.filters, topic: 'all' })"
                            :class="{
                                'text-neutral-200 bg-neutral-900 dark:hover:bg-neutral-200 dark:bg-neutral-300  dark:text-neutral-900': $page.props.filters.topic == 'all',
                                ' bg-neutral-100 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800 rounded-full px-3 py-2 text-neutral-600 dark:text-neutral-300': $page.props.filters.topic !== 'all'

                            }" class="cursor-pointer flex items-center gap-3  rounded-full px-3 py-2">
                        <div class="">
                            <font-awesome-icon icon="archive" />
                        </div>
                        <h6 class="text-nowrap">All Topics</h6>
                        </Link>

                        <Topic v-for="topic in topics" :key="topic.id" :data="topic" />

                    </div>

                    <span class="cursor-pointer text-neutral-600 dark:text-neutral-300 dark:bg-neutral-900">
                        <font-awesome-icon v-if="canScrollRight" @click="scrollRight" class="px-3 py-1"
                            icon="angles-right" />
                        <font-awesome-icon v-if="canScrollLeft" @click="scrollLeft" class="px-3 py-1"
                            icon="angles-left" />
                    </span>
                </div>

                <!-- Filter Bar -->

                <Filter />


                <!-- Table List -->
                <div>
                    <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-neutral-500 dark:text-neutral-400">
                            <thead
                                class="text-sm font-thin text-neutral-500  bg-neutral-50 dark:bg-neutral-900 dark:text-neutral-400 border-b dark:border-neutral-700">
                                <tr>
                                    <th scope="col" class=" px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Acceptance
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Difficulty
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="problem in problems.data" :key="problem.id"
                                    class="odd:bg-white odd:dark:bg-neutral-900 even:bg-neutral-50 even:dark:bg-neutral-800 ">
                                    <th scope="row"
                                        class="px-6 py-3 font-medium text-neutral-900 whitespace-nowrap dark:text-white">
                                        <span class="text-md text-yellow-400">
                                            <font-awesome-icon icon="lock" />
                                        </span>
                                    </th>
                                    <td>
                                        <Link :href="route('problems.show', problem.slug)" :title="problem.title"
                                            class="px-6 py-3 text-nowrap text-md text-neutral-700 dark:text-neutral-300 font-medium hover:text-blue-500">
                                        {{ problem.title.length > 50 ? problem.title.slice(0, 50) + "..." :
                                            problem.title
                                        }}
                                        </Link>
                                    </td>

                                    <td class="px-6 py-3">
                                        {{ problem.acceptance }} %
                                    </td>
                                    <td class="px-6 py-3">
                                        <span :class="{
                                            'text-green-500': problem.difficulty == 'easy',
                                            'text-yellow-500': problem.difficulty == 'medium',
                                            'text-red-500': problem.difficulty == 'hard'
                                        }">{{ problem.difficulty }}</span>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-between items-center mt-3">

                        <select @change="changeRange" v-model="range"
                            class="border-none rounded-md dark:bg-neutral-800 dark:hover:bg-neutral-700 focus:ring-0 dark:text-neutral-300 py-1.5">
                            <option v-for="item in [10, 20, 50, 100]" :key="item" :value="item">{{ item }}/Page</option>
                        </select>


                        <Pagination :links="problems.links" />

                    </div>
                </div>
            </div>




            <!-- Sidebar content -->
            <div class="space-y-4">


                <div class="dark:bg-neutral-800 rounded-md px-4 py-2 shadow-md">

                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-md text-semibold text-neutral-600 dark:text-neutral-300">Tranding Companies</h4>
                        <div class="flex gap-2 text-neutral-600 dark:text-neutral-300">
                            <span
                                class="size-8 flex items-center justify-center rounded-md shadow-sm bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-700/40 dark:hover:bg-neutral-700 cursor-pointer">
                                <font-awesome-icon icon="angle-left" />
                            </span>

                            <span
                                class="size-8 flex items-center justify-center rounded-md shadow-sm bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-700/40 dark:hover:bg-neutral-700 cursor-pointer">
                                <font-awesome-icon icon="angle-right" />
                            </span>
                        </div>
                    </div>


                    <div class="relative w-full flex items-center mb-4">
                        <input type="text"
                            class="appearance-none relative border-none rounded-md bg-neutral-100 dark:bg-neutral-700/40 dark:text-neutral-300 focus:bg-neutral-200 focus:ring-0 dark:focus:bg-neutral-700 focus:outline-none w-full h-auto pl-9 py-1.5"
                            placeholder="Search for a company">
                        <span class="absolute left-4 text-neutral-400 dark:text-neutral-400 ">
                            <font-awesome-icon icon="search" />
                        </span>
                    </div>



                    <div class="flex flex-wrap gap-2">
                        <div
                            class="text-nowrap text-xs space-x-3 bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-700/50 dark:hover:bg-neutral-600/50 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-neutral-300">Google</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-neutral-800 rounded-full">50</span>
                        </div>

                        <div
                            class="text-nowrap text-xs space-x-3 bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-700/50 dark:hover:bg-neutral-600/50 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-neutral-300">IBM</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-neutral-800 rounded-full">50</span>
                        </div>

                        <div
                            class="text-nowrap text-xs space-x-3 bg-neutral-100 hover:bg-neutral-200 dark:bg-neutral-700/50 dark:hover:bg-neutral-600/50 px-2 py-1 rounded-lg cursor-pointer">
                            <span class="dark:text-neutral-300">Meta</span>
                            <span class="text-xs font-medium px-2 bg-yellow-400 text-neutral-800 rounded-full">50</span>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </AppLayout>
</template>

<style scoped>
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

.scrollbar-hide {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
}
</style>