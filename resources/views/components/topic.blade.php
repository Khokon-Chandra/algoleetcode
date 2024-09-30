@props(['icon' => 'fa fa-globe'])

<a
    {{ $attributes->merge([
        'class' =>
            'cursor-pointer flex items-center gap-3 bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700 rounded-full px-3 py-2 text-gray-600 dark:text-gray-300',
    ]) }}>
    <div class="">
        <i class="{{ $icon }}"></i>
    </div>
    <h6 class="text-nowrap">{{ $slot }}</h6>
</a>
