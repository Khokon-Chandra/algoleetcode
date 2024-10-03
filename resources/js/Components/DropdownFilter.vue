
<template>
    <div class="relative">
        <Dropdown align="left">
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center gap-2 rounded-md border border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:hover:text-gray-100 px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                        Lists
                        <font-awesome-icon icon="angle-down" />
                    </button>
                </span>
            </template>

            <template #content>

                <DropdownLink class="dark:text-gray-300 dark:hover:bg-gray-600 flex justify-between items-center gap-2"
                    :href="route('problems.index', { type: 'filtering' })">
                    <span class="text-nowrap">LeetCode curated Algo 170</span>
                    <font-awesome-icon class="text-green-500" icon="check" />
                </DropdownLink>
            </template>
        </Dropdown>
    </div>
</template>