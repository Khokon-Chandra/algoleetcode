@props([
    'id' => rand(999, 999999),
    'action' => 'Action',
])

<button id="{{ $id }}" data-dropdown-toggle="checkbox_{{ $id }}" data-dropdown-placement="bottom"
    class="text-gray-600 bg-gray-100 hover:bg-gray-200  focus:outline-none  rounded-md text-sm px-4 py-2 text-center inline-flex items-center dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300"
    type="button">{{ $action }}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="checkbox_{{ $id }}"
    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200 shadow-sm" aria-labelledby="{{ $id }}">
        {{ $slot }}
    </ul>
</div>
