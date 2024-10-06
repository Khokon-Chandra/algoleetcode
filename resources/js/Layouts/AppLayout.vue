<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>

<template>

    <header class="border-b border-neutral-300 dark:border-neutral-700 dark:bg-neutral-800 shadow-sm">
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