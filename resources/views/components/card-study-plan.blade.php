@props(['img', 'alt' => 'study plan', 'title', 'description'])

<a href="#" class="p-2 rounded-lg border border-gray-200 dark:border-gray-800 dark:bg-gray-700 flex gap-4 shadow-sm hover:shadow-2xl transition duration-200 ease-linear">
    <img class="shrink-0 size-[72px] rounded-lg" src="{{ $img }}" alt="study plan">
    <div class="flex flex-col items-start justify-center overflow-hidden">
        <h5 class="text-black text-medium dark:text-gray-300">{{ $title }}</h5>
        <p class="text-xs .text-lc-text-tertiary text-nowrap dark:text-gray-400">{{ $description }}</p>
    </div>
</a>
