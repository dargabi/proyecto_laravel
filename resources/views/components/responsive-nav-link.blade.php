@props(['active'])

@php
// Define classes based on active state with improved formatting and subtle enhancements
$classes = ($active ?? false)
    ? 'block w-full ps-3 pe-4 py-2.5
    border-l-4 border-indigo-500 dark:border-indigo-400
    text-start text-base font-medium
    text-indigo-700 dark:text-indigo-300
    bg-indigo-50 dark:bg-indigo-900/50
    focus:outline-none focus:text-indigo-800 dark:focus:text-indigo-200
    focus:bg-indigo-100 dark:focus:bg-indigo-900
    focus:border-indigo-700 dark:focus:border-indigo-300
    transition duration-200 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2.5
    border-l-4 border-transparent
    text-start text-base font-medium
    text-gray-600 dark:text-gray-400
    hover:text-gray-800 dark:hover:text-gray-200
    hover:bg-gray-50 dark:hover:bg-gray-700/50
    hover:border-gray-300 dark:hover:border-gray-600
    focus:outline-none focus:text-gray-800 dark:focus:text-gray-200
    focus:bg-gray-50 dark:focus:bg-gray-700/50
    focus:border-gray-300 dark:focus:border-gray-600
    transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
