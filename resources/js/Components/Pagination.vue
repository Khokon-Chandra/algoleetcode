<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    links: Array,
})

</script>

<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, key) in links">
                
                <div v-if="link.url === null" :key="key"
                    class="mb-1 mr-1 px-4 py-2 text-neutral-400 dark:text-neutral-300 text-sm leading-4 rounded">
                    <font-awesome-icon class="text-neutral-500 dark:text-neutral-500" v-if="key == 0" icon="angle-left" />
                    <font-awesome-icon class="text-neutral-500 dark:text-neutral-500" v-else-if="key == links.length-1" icon="angle-right"/>
                    <span v-else>{{ link.label }}</span>
                </div>

                <Link v-else :key="`link-${key}`" preserve-scroll :disabled="link.active"
                    :aria-disabled="link.active ? 'true' : 'false'"
                    class="mb-1 mr-1 px-4 py-2   text-neutral-600 dark:text-neutral-300 focus:text-indigo-500 text-sm leading-4 hover:bg-neutral-200 dark:hover:bg-neutral-700/50 focus:border-indigo-500 rounded"
                    :class="{
                        'bg-white dark:bg-neutral-700 shadow-md border border-neutral-200 dark:border-none': link.active,
                        'bg-neutral-100 dark:bg-neutral-800': link.active == false
                    }" :href="link.url">
                <font-awesome-icon v-if="key == 0" icon="angle-left" />
                <font-awesome-icon v-else-if="key == (links.length - 1)" icon="angle-right" />
                <span v-else>{{ link.label }}</span>
                </Link>

            </template>
        </div>
    </div>
</template>