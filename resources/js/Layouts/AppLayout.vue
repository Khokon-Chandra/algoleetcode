<script setup>
import { ref } from 'vue';
import Navbar from '@/Components/Navbar.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
   
        <header class="border-b border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm">
            <Navbar />
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 px-6 sm:px-6 lg:px-8">
                <slot />
            </div>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Footer section goes here
        </footer>
   
</template>