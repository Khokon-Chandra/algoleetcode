<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import AppLogo from './Icon/AppLogo.vue';
import Avatar from '@/images/avatar.png'
import Dropdown from './Dropdown.vue';
import DropdownLink from './DropdownLink.vue';
const isNavbarVisible = ref(false);

// Function to toggle the navbar visibility
const toggleNavbar = () => {
    isNavbarVisible.value = !isNavbarVisible.value;
};

</script>

<template>
    <nav class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8 flex justify-between items-center">
        <ul class="flex items-center gap-4">
            <li>
                <Link href="/">
                <AppLogo></AppLogo>
                </Link>
            </li>

            <li class="hidden md:flex">
                <Link :class="route().current('problems.index') ? 'active' : ''"
                    class="text-neutral-700 dark:text-neutral-300 hover:text-black dark:hover:text-neutral-100 py-3"
                    :href="route('problems.index')">Problems</Link>
            </li>

            <li class="hidden md:flex">
                <Link :href="route('discussions.index','all-interview-questions')"
                    :class="route().current('discussions.*') ? 'active' : ''"
                    class="text-neutral-700 dark:text-neutral-300 hover:text-black dark:hover:text-neutral-100 py-3">
                Discuss</Link>
            </li>
        </ul>


        <ul v-if="$page.props.auth.user" class="hidden md:flex items-center gap-4">
            <li>
                <div
                    class="size-8 flex items-center justify-center relative cursor-pointer hover:bg-neutral-300 dark:hover:bg-neutral-600 rounded-md dark:text-neutral-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                        fill="currentColor" class="hover:text-text-primary dark:hover:text-text-primary ">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.20374 15.8174C6.18177 15.8563 6.15975 15.8945 6.13771 15.9322H17.8623C17.8403 15.8945 17.8182 15.8563 17.7963 15.8174C16.8756 14.1898 16.3333 12.0111 16.3333 9.21793C16.3333 6.93819 14.4012 5.07507 12 5.07507C9.5988 5.07507 7.66667 6.93819 7.66667 9.21793C7.66667 12.0111 7.12442 14.1898 6.20374 15.8174ZM20 17.9322H4.00001C3.00196 17.9322 2.61971 16.6307 3.45925 16.091C3.66114 15.9612 4.0464 15.5691 4.46294 14.8327C5.20893 13.5139 5.66667 11.6748 5.66667 9.21793C5.66667 5.81702 8.51018 3.07507 12 3.07507C15.4898 3.07507 18.3333 5.81702 18.3333 9.21793C18.3333 11.6748 18.7911 13.5139 19.5371 14.8327C19.9536 15.5691 20.3389 15.9612 20.5408 16.091C21.3803 16.6307 20.9981 17.9322 20 17.9322ZM12.9372 19.2783C13.2219 18.805 13.8363 18.6521 14.3096 18.9368C14.7828 19.2215 14.9357 19.836 14.651 20.3092C14.0976 21.2292 13.0875 21.7902 12 21.7902C10.9125 21.7902 9.90245 21.2292 9.34903 20.3092C9.06434 19.836 9.2172 19.2215 9.69045 18.9368C10.1637 18.6521 10.7781 18.805 11.0628 19.2783C11.2515 19.5919 11.6085 19.7902 12 19.7902C12.3915 19.7902 12.7485 19.5919 12.9372 19.2783Z">
                        </path>
                    </svg>
                </div>
            </li>
            <li>
                <a class="size-8 flex items-center justify-center hover:bg-neutral-300 dark:hover:bg-neutral-600 rounded-md dark:text-neutral-300"
                    href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="1em" height="1em"
                        fill="currentColor"
                        class="h-[20px] w-[20px] hover:text-text-primary dark:hover:text-text-primary text-text-secondary dark:text-text-secondary">
                        <path fill-rule="evenodd"
                            d="M7.19 1.564a.75.75 0 01.729.069c2.137 1.475 3.373 3.558 3.981 5.002l.641-.663a.75.75 0 011.17.115c1.633 2.536 1.659 5.537.391 7.725-1.322 2.282-3.915 2.688-5.119 2.688-1.177 0-3.679-.203-5.12-2.688-.623-1.076-.951-2.29-.842-3.528.109-1.245.656-2.463 1.697-3.54.646-.67 1.129-1.592 1.468-2.492.337-.895.51-1.709.564-2.105a.75.75 0 01.44-.583zm.784 2.023c-.1.368-.226.773-.385 1.193-.375.997-.947 2.13-1.792 3.005-.821.851-1.205 1.754-1.282 2.63-.078.884.153 1.792.647 2.645C6.176 14.81 7.925 15 8.983 15c1.03 0 2.909-.366 3.822-1.94.839-1.449.97-3.446.11-5.315l-.785.812a.75.75 0 01-1.268-.345c-.192-.794-1.04-2.948-2.888-4.625z"
                            clip-rule="evenodd"></path>
                    </svg></a>
            </li>

            <li>
                <Dropdown align="right">
                    <template #trigger>
                        <div class="cursor-pointer">
                            <img class="size-8 rounded-full border-2 border-indigo-600" :src="Avatar"
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
                                Sign out
                            </DropdownLink>
                        </div>



                    </template>
                </Dropdown>
            </li>
        </ul>

        <div v-else-if="$page.props.auth.admin">
            <Link :href="route('admin.dashboard')" class="text-neutral-700 text-md hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">Dashboard</Link>
        </div>

        <div v-else class="gap-4 hidden md:flex items-center">
            <Link :href="route('register')"
                class="text-neutral-700 text-md hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">
            Register
            </Link>
            <span class="text-neutral-700 text-sm font-thin dark:text-neutral-300 ">or</span>
            <Link :href="route('login')"
                class="text-neutral-700 text-md hover:text-neutral-900 dark:text-neutral-300 dark:hover:text-neutral-100">
            Sign
            in</Link>

        </div>



        <ul class="flex md:hidden items-center justify-center">
            <li @click="toggleNavbar"
                class="text-xl text-neutral-600 dark:text-neutral-300 hover:text-neutral-900 dark:hover:text-neutral-100 py-3 cursor-pointer">
                <font-awesome-icon icon="bars" />
            </li>
        </ul>

    </nav>


    <nav v-if="isNavbarVisible"
        class="transition duration-300 ease-in-out md:hidden fixed top-0 left-0 w-full h-full bg-neutral-100 dark:bg-neutral-800">

        <div class="border-b border-neutral-300 dark:border-neutral-600 flex justify-between items-center px-6 py-4">


            <div v-if="!$page.props.auth.user" class="space-x-4">
                <Link
                    class="text-neutral-600 dark:text-neutral-300 hover:text-neutral-900 dark:hover:text-neutral-100 cursor-pointer"
                    :href="route('register')">Register</Link>
                <Link
                    class="text-neutral-600 dark:text-neutral-300 hover:text-neutral-900 dark:hover:text-neutral-100 cursor-pointer"
                    :href="route('login')">Sign in</Link>
            </div>

            <div v-else class="flex items-center gap-3">
                <div class="size-8 bg-neutral-200 border-2 border-indigo-500 rounded-full"></div>
                <h4 class="text-neutral-600 text-md font-medium dark:text-neutral-300">Username</h4>
            </div>


            <span @click="toggleNavbar"
                class="text-neutral-600 dark:text-neutral-300 text-xl cursor-pointer hover:text-neutral-900 dark:hover:text-neutral-100">
                <font-awesome-icon icon="close" />
            </span>

        </div>

        <ul class="flex flex-col gap-1 p-6">

            <li>
                <Link class="text-neutral-600 dark:text-neutral-300 flex gap-4 items-center p-2 border-b border-neutral-200 dark:border-neutral-700 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800"
                    :href="route('problems.index')">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M20.995 4.824A3 3 0 0018 2H6l-.176.005A3 3 0 003 5v14l.005.176A3 3 0 006 22h12l.176-.005A3 3 0 0021 19V5l-.005-.176zM6 4h12l.117.007A1 1 0 0119 5v14l-.007.117A1 1 0 0118 20H6l-.117-.007A1 1 0 015 19V5l.007-.117A1 1 0 016 4zm5.718 9.304a1 1 0 01.063 1.321l-.085.093-2.062 2a1 1 0 01-1.3.08l-.093-.08-.937-.91A1 1 0 018.6 14.292l.095.082.241.234 1.367-1.325a1 1 0 011.414.022zM17 15a1 1 0 00-1-1h-2l-.117.007A1 1 0 0014 16h2l.117-.007A1 1 0 0017 15zm-5.282-7.696a1 1 0 01.063 1.321l-.085.093-2.062 2a1 1 0 01-1.3.08l-.093-.08-.937-.91A1 1 0 018.6 8.292l.095.082.241.234 1.367-1.325a1 1 0 011.414.022zM17 9a1 1 0 00-1-1h-2l-.117.007A1 1 0 0014 10h2l.117-.007A1 1 0 0017 9z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                    <span>Problems</span>
                </Link>
            </li>
           
            <li>
                <Link class="text-neutral-600 dark:text-neutral-300 flex gap-4 items-center p-2 border-b border-neutral-200 dark:border-neutral-700 hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:bg-neutral-800"
                    :href="route('discussions.index','all-interview-questions')">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M2 11.001a9.001 9.001 0 014.974-8.047A8.876 8.876 0 0110.998 2h.535c.018 0 .037 0 .055.002 3.934.218 7.204 3.02 8.15 6.753a1 1 0 01-1.94.49c-.734-2.9-3.27-5.065-6.294-5.245h-.51a6.876 6.876 0 00-3.12.74l-.004.002A7.001 7.001 0 004 11.003v.002a6.873 6.873 0 00.738 3.117c.206.407.271.871.185 1.32l-.387 2.022 2.022-.387c.448-.086.912-.021 1.32.185.44.222.9.395 1.373.518a1 1 0 11-.502 1.936 8.865 8.865 0 01-1.773-.669.067.067 0 00-.042-.006l-3.47.665a1 1 0 01-1.17-1.17l.665-3.47a.067.067 0 00-.006-.043A8.873 8.873 0 012 11.001zM17.004 20h-.005a3 3 0 01-2.68-1.658l-.004-.007A2.936 2.936 0 0114 17.004v-.206a2.995 2.995 0 012.773-2.797l.233-.001c.46-.001.917.107 1.33.315l.007.004A3 3 0 0120 17v.005c.001.425-.09.845-.268 1.232l-.133.29a1 1 0 00-.074.606l.093.485-.484-.093a1 1 0 00-.606.073l-.29.134a2.937 2.937 0 01-1.234.268zm-.296-8A4.995 4.995 0 0012 16.738v.262c-.002.777.18 1.543.53 2.237a5 5 0 006.542 2.313l2.303.441c.365.07.686-.25.616-.615l-.441-2.303a5 5 0 00-2.312-6.541A4.937 4.937 0 0017 12h-.292z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                    <span>Discuss</span>
                </Link>
            </li>


            <li v-if="$page.props.auth.user">
                <form method="POST" action="{{ route('logout') }}"
                    class="text-red-600 hover:text-red-800  p-2 border-b border-neutral-200 dark:border-neutral-700  dark:bg-neutral-800">
                    <input type="hidden" name="_token" :value="$page.props.csrf_token">
                    <Link :href="route('logout')" method="post" as="button" class="w-full flex gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2 11.001a9.001 9.001 0 014.974-8.047A8.876 8.876 0 0110.998 2h.535c.018 0 .037 0 .055.002 3.934.218 7.204 3.02 8.15 6.753a1 1 0 01-1.94.49c-.734-2.9-3.27-5.065-6.294-5.245h-.51a6.876 6.876 0 00-3.12.74l-.004.002A7.001 7.001 0 004 11.003v.002a6.873 6.873 0 00.738 3.117c.206.407.271.871.185 1.32l-.387 2.022 2.022-.387c.448-.086.912-.021 1.32.185.44.222.9.395 1.373.518a1 1 0 11-.502 1.936 8.865 8.865 0 01-1.773-.669.067.067 0 00-.042-.006l-3.47.665a1 1 0 01-1.17-1.17l.665-3.47a.067.067 0 00-.006-.043A8.873 8.873 0 012 11.001zM17.004 20h-.005a3 3 0 01-2.68-1.658l-.004-.007A2.936 2.936 0 0114 17.004v-.206a2.995 2.995 0 012.773-2.797l.233-.001c.46-.001.917.107 1.33.315l.007.004A3 3 0 0120 17v.005c.001.425-.09.845-.268 1.232l-.133.29a1 1 0 00-.074.606l.093.485-.484-.093a1 1 0 00-.606.073l-.29.134a2.937 2.937 0 01-1.234.268zm-.296-8A4.995 4.995 0 0012 16.738v.262c-.002.777.18 1.543.53 2.237a5 5 0 006.542 2.313l2.303.441c.365.07.686-.25.616-.615l-.441-2.303a5 5 0 00-2.312-6.541A4.937 4.937 0 0017 12h-.292z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <span class="text-nowrap">Sign out</span>

                    </Link>

                </form>
            </li>


        </ul>
    </nav>
</template>