<script setup>
import { onMounted, ref } from 'vue';
import { initDismisses } from 'flowbite';

defineProps({
    type: String,
    message: String
})

</script>
<template>
    <div class="fixed z-[9999999] w-full left-0 top-4 flex justify-center">
        <div :class="{
            ' border-green-600/50': type == 'success',
            ' border-danger-600/50': type == 'error',
        }"
            class="flex-1 flex justify-between items-center max-w-md shadow-xl p-6 border bg-white dark:bg-gray-700 rounded-lg">
            <h5 :class="{
                'text-green-600': type == 'success',
                'text-red-600': type == 'error',
            }" class="flex-1 text-sm text-medium leading-5  dark:text-white text-wrap">{{ message }}
            </h5>
            <span class="ml-auto cursor-pointer text-red-600 px-2 py-1 hover:bg-red-500/10 rounded-full"
                @click="$emit('close-toastr')">
                <font-awesome-icon icon="close" />
            </span>
        </div>
    </div>
</template>