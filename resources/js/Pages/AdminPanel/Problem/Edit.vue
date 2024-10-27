<script setup>

import { ref, computed, reactive, onMounted } from 'vue';

import { Link, router, usePage } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import BreadCumbar from '@/Components/BreadCumbar.vue';
import Card from '@/Components/Card.vue';


const props = defineProps({
    topics: Object,
    tags: Object,
    companies: Object,
    problem: Object,
    errors: Object,
})


const searchTag = ref('');

const forms = reactive({
    title: '',
    description: '',
    topic: '',
    difficulty: 'easy',
    examples: [
        { input: '', output: '' }
    ],
    constraints: [
        { value: '' }
    ],
    tags: []

})

onMounted(() => {

    forms.tags = props.problem.tags.map(tag => tag.id);
    forms.topic = props.problem.topic_id;
    forms.title = props.problem.title;
    forms.description = props.problem.description;
    forms.difficulty = props.problem.difficulty;

    if (props.problem.examples) {
        forms.examples = props.problem.examples;
    }

    if (props.problem.constraints) {
        forms.constraints = props.problem.constraints;
    }
})



const addExample = () => {
    forms.examples.push({ input: '', output: '' })
}

const removeExample = (example) => {
    forms.examples = forms.examples.filter(item => item != example);
}

const addConstraint = () => {
    forms.constraints.push({ value: '' })
}

const removeConstraint = (constraint) => {
    forms.constraints = forms.constraints.filter(item => item != constraint);
}


const filteredTags = computed(() => {
    if (searchTag.value) {

        return props.tags.filter(item => item.name.includes(searchTag.value));
    }

    return props.tags;
})




const selectDeselectTag = (tagId) => {
    const selectedTag = forms.tags.includes(tagId);
    if (selectedTag) {
        forms.tags = forms.tags.filter(id => id !== tagId);
    } else {
        forms.tags.push(tagId);
    }
}


const submitForm = () => {
    router.put(route('admin.problems.update', props.problem.id), forms, {
        preserveState: true,
        preserveScroll: true
    })
}




</script>
<template>
    <AdminLayout>


        <BreadCumbar>
            <Link :href="route('admin.problems.index')"
                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
            Problems</Link>

            <font-awesome-icon class="text-lg font-medium text-gray-600 dark:text-gray-500" icon="angle-right" />

            <span
                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                Edit</span>

        </BreadCumbar>



        <div class="space-y-6 lg:space-y-0 lg:grid lg:grid-cols-4 gap-4">

            <Card class="col-span-3 p-4">
                <div class="mb-5">
                    <label for="title"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title" v-model="forms.title" @input="errors.title = false"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Problem title" required />

                    <p v-if="errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ errors.title }}</p>

                </div>


                <div class="mb-5">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea rows="4" v-model="forms.description" @input="errors.description = false"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Description..." required></textarea>
                    <p v-if="errors.description" class="mt-2 text-sm text-red-600 dark:text-red-500">{{
                        errors.description }}</p>

                </div>

                <!-- Problem examples -->

                <div class="mb-5">
                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Examples</span>
                    <hr class="mb-5">

                    <div v-for="(example, index) in forms.examples" :key="index" class="flex gap-4">
                        <div class="mb-5 flex-1">

                            <input type="text" id="input{{ index }}" v-model="example.input"
                                @input="errors[`examples.${index}.input`] = false"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Input" required />

                            <p v-if="errors[`examples.${index}.input`]"
                                class="mt-2 text-sm text-red-600 dark:text-red-500">{{
                                    errors[`examples.${index}.input`].replace(`examples.${index}.input`, 'input') }}</p>

                        </div>

                        <div class="mb-5 flex-1">

                            <input type="text" id="output{{ index }}" v-model="example.output"
                                @input="errors[`examples.${index}.output`] = false"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Output" required />

                            <p v-if="errors[`examples.${index}.output`]"
                                class="mt-2 text-sm text-red-600 dark:text-red-500">{{
                                    errors[`examples.${index}.output`].replace(`examples.${index}.output`, 'output') }}</p>

                        </div>

                        <div class="ml-auto self-start mb-5">
                            <button v-if="index == 0" @click="addExample"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <font-awesome-icon icon="plus" />
                            </button>

                            <button v-else @click="removeExample(example)"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                <font-awesome-icon icon="close" />
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Constraints -->
                <div class="mb-5">


                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Constraints</span>
                    <hr class="mb-5">

                    <div v-for="(constraint, index) in forms.constraints" :key="index" class="flex flex-row gap-4 mb-5">

                        <div class="flex-1">
                            <input type="text" v-model="constraint.value"
                                @input="errors[`constraints.${index}.value`] = false"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Constraints..." required />

                            <p v-if="errors[`constraints.${index}.value`]"
                                class="mt-2 text-sm text-red-600 dark:text-red-500">{{
                                    errors[`constraints.${index}.value`].replace(`constraints.${index}.value`, 'constraint')
                                }}</p>

                        </div>


                        <div class="">
                            <button v-if="index == 0" @click="addConstraint"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <font-awesome-icon icon="plus" />
                            </button>

                            <button v-else @click="removeConstraint(constraint)"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                <font-awesome-icon icon="close" />
                            </button>
                        </div>

                    </div>

                </div>


                <div class="flex justify-end">
                    <button @click="submitForm" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                        Problem</button>

                </div>

            </Card>



            <Card class="w-full p-4 space-y-6">
                <div>
                    <label for="topic"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>
                    <select id="topic" @change="errors.topic = false" v-model="forms.topic"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 capitalize">
                        <option value="">Select Topic</option>
                        <option v-for="topic in topics" :key="topic.id" :value="topic.id">{{ topic.name }}</option>
                    </select>
                    <p v-if="errors.topic" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ errors.topic }}</p>

                </div>



                <div>
                    <label for="difficulty"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Difficulty</label>
                    <select id="difficulty" @change="errors.difficulty = false" v-model="forms.difficulty"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 capitalize">
                        <option value="">Select difficulty</option>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                    <p v-if="errors.difficulty" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ errors.difficulty
                        }}</p>

                </div>


                <div>

                    <div class="mb-4">
                        <div class="relative w-full flex items-center mb-2">
                            <input type="search" v-model="searchTag"
                                class="relative pl-8 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="filter tags">
                            <span class="absolute left-4 text-neutral-400 dark:text-neutral-300 ">
                                <font-awesome-icon icon="search" />
                            </span>
                        </div>

                        <p v-if="errors.tags && forms.tags.length == 0"
                            class="mt-2 text-sm text-red-600 dark:text-red-500">{{ errors.tags }}</p>

                    </div>


                    <div class="flex flex-wrap overflow-y-auto gap-2 max-h-[500px] custom-scrollbar">
                        <span v-for="tag in filteredTags" :key="tag.id" @click="selectDeselectTag(tag.id)" :class="{
                            'text-white bg-blue-600': forms.tags.includes(tag.id),
                            'text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-gray-700': !forms.tags.includes(tag.id)
                        }" class="cursor-pointer text-sm font-normal leading-5 rounded-full px-2 py-1">{{
                            tag.name }}</span>
                    </div>

                </div>
            </Card>

        </div>






    </AdminLayout>
</template>

<style scoped>
/* Custom scrollbar styles */
.custom-scrollbar::-webkit-scrollbar {
    width: 5px;
    /* Set the width of the scrollbar */
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: #6b7280;
    /* Tailwind `neutral-500` (Scrollbar thumb color) */
    border-radius: 8px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background-color: #4c4e52;
    /* Tailwind `neutral-700` (Scrollbar track color) */
}
</style>