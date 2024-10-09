<script setup>
import { ref, computed } from 'vue';
import { Link, router, usePage } from '@inertiajs/vue3';
import { useLocalStorage } from "@vueuse/core";
import AppLogo from '@/Components/Icon/AppLogo.vue';
import Avatar from '@/images/avatar.png';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

const testCase = ref(true);

const selectedLanguage = useLocalStorage("selected-language", "cpp");

const code = useLocalStorage(`save-code-${selectedLanguage.value}`, "");


const slug = computed(() => usePage().props.slug);

const runCode = () => {

    let url = route('problems.run', slug.value);

    router.post(url, {
        language: selectedLanguage.value,
        code: code.value
    });
}


</script>

<template>

    <div class="h-screen overflow-hidden flex flex-col">
        <header class="px-6 sm:px-6 lg:px-4 bg-neutral-200 dark:bg-neutral-900">
            <nav class="flex justify-between items-center py-2">
                <ul class="flex space-x-0.5 group">
                    <li class="px-3 py-1 ">
                        <Link href="/">
                        <AppLogo />
                        </Link>
                    </li>
                    <li
                        class="px-3 py-1 group-hover:bg-neutral-100 hover:bg-neutral-200 dark:group-hover:bg-neutral-700 flex items-center gap-1 rounded-l-md">
                        <font-awesome-icon class="text-neutral-500 dark:text-neutral-400 " icon="indent" />
                        <Link :href="route('problems.index')">
                        <span class="text-md font-semibold dark:text-neutral-300 text-nowrap">Problem List</span>
                        </Link>
                    </li>
                    <li
                        class="px-3 py-1 group-hover:bg-neutral-100 hover:bg-neutral-200 text-neutral-500 font-thin dark:group-hover:bg-neutral-700">
                        <font-awesome-icon class="dark:text-neutral-400" icon="angle-left" />
                    </li>
                    <li
                        class="px-3 py-1 group-hover:bg-neutral-100 hover:bg-neutral-200 text-neutral-500 font-thin dark:group-hover:bg-neutral-700">
                        <font-awesome-icon class="dark:text-neutral-400" icon="angle-right" />
                    </li>
                    <li
                        class="px-3 py-1 group-hover:bg-neutral-100 hover:bg-neutral-200 text-neutral-500 font-thin dark:group-hover:bg-neutral-700 rounded-r-md">
                        <font-awesome-icon class="dark:text-neutral-400 " icon="shuffle" />
                    </li>
                </ul>
                <ul class="flex space-x-0.5">
                    <li @click="runCode"
                        class="px-3 py-1 dark:bg-neutral-700 dark:bg-opacity-50 dark:hover:bg-neutral-600 flex items-center gap-2 rounded-l-md cursor-pointer">
                        <font-awesome-icon class="text-neutral-600 dark:text-neutral-400 text-xl" icon="caret-right" />
                        <span class="text-md font-semibold dark:text-neutral-300">Run</span>
                    </li>

                    <li
                        class="px-3 py-1 dark:bg-neutral-700 dark:bg-opacity-50 dark:hover:bg-neutral-600 flex items-center gap-2 cursor-pointer">
                        <font-awesome-icon class="text-green-600 text-lg" icon="cloud-arrow-up" />
                        <span class="text-md font-semibold text-green-600">Submit</span>
                    </li>

                </ul>
                <ul class="flex gap-3">
                    <li v-if="$page.props.auth.user">
                        <Dropdown align="right">
                            <template #trigger>
                                <div class="cursor-pointer">
                                    <img class="size-8 rounded-full border-1 border-indigo-600" :src="Avatar"
                                        alt="Profile picture">
                                </div>
                            </template>

                            <template #content>

                                <div class="w-32">
                                    <DropdownLink
                                        class="dark:text-neutral-300 dark:hover:bg-neutral-600 flex justify-between items-center gap-2"
                                        href="">
                                        <span class="text-nowrap">Profile</span>
                                        <font-awesome-icon class="text-green-500" icon="user" />
                                    </DropdownLink>

                                    <DropdownLink
                                        class="dark:text-neutral-300 dark:hover:bg-neutral-600 flex justify-between items-center gap-2 text-nowrap"
                                        :href="route('logout')" method="post" as="button">
                                        Log Out
                                    </DropdownLink>
                                </div>



                            </template>
                        </Dropdown>
                    </li>

                    <li v-else class="gap-4 hidden md:flex items-center">
                        <Link :href="route('register')"
                            class="text-neutral-700 text-md hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">
                        Register
                        </Link>
                        <span class="text-neutral-700 text-sm font-thin dark:text-neutral-300 ">or</span>
                        <Link :href="route('login')"
                            class="text-neutral-700 text-md hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">
                        Sign
                        in</Link>

                    </li>
                </ul>
            </nav>
        </header>

        <main class="flex-1">
            <div class="mx-auto px-6 pb-2 sm:px-6 lg:px-4 bg-neutral-200 dark:bg-neutral-950 h-full overflow-y-hidden">
                <slot />
            </div>
        </main>
    </div>
</template>