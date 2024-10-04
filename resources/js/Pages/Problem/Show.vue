<script setup>
import { Splitpanes, Pane } from '../../../../node_modules/splitpanes';
import 'splitpanes/dist/splitpanes.css';
import Playground from '@/Layouts/Playground.vue';

</script>

<template>
    <Playground>
        <splitpanes>
            <!-- Left Pane: Task Description -->
            <pane>
                <div
                    class="h-full rounded-lg border border-gray-300 bg-white dark:border-gray-700 dark:bg-gray-800 shadow-sm">
                    Description</div>
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
.splitpanes--horizontal{
    row-gap: 2px;
}
</style>