<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Splitpanes, Pane } from '../../../../node_modules/splitpanes';
import 'splitpanes/dist/splitpanes.css';
import Playground from '@/Layouts/Playground.vue';
import MemoIcon from '@/Components/Icon/MemoIcon.vue';

const isHorizontal = ref(true);


function handleResize() {
    const width = window.innerWidth;
    if (width < 640) {
        isHorizontal.value = true;  // Single column on small screens
    } else {
        isHorizontal.value = false;   // Two columns (horizontal) on large screens
    }
}

onMounted(() => {
    window.addEventListener('resize', handleResize);
    handleResize();  // Initial call on component mount
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', handleResize);
});

</script>

<template>
    <Playground>
        <splitpanes :horizontal="isHorizontal">
            <!-- Left Pane: Task Description -->
            <pane>
                <div
                    class="h-full rounded-lg border border-gray-300 bg-white dark:border-gray-700 dark:bg-gray-800 shadow-sm">
                    <div class="dark:bg-gray-600 flex">
                        <Link class="flex-1 flex justify-between items-center gap-2">
                            <span class="text-indigo-500"><MemoIcon class="size-4 " /></span>
                            <span>Description</span>
                        </Link>
                    </div>
                </div>
            </pane>

            <!-- Right Pane: Code Editor -->
            <pane>
                <splitpanes horizontal>
                    <pane size="80">
                        <div
                            class="border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 h-full">
                            Code block</div>
                    </pane>

                    <pane size="20">
                        <div
                            class="border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 h-full">
                            Input/Output</div>
                    </pane>
                </splitpanes>
            </pane>
        </splitpanes>
    </Playground>
</template>
<style scoped>
.splitpanes--vertical {
    column-gap: 2px;
}

.splitpanes--horizontal {
    row-gap: 2px;
}
</style>