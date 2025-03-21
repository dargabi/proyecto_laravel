@props(['active'])

@php
    // Define the classes based on active state
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-3 pt-2 pb-1 border-b-2 border-sage-500 dark:border-sage-400
    text-sm font-medium leading-5 text-gray-900 dark:text-gray-100
    focus:outline-none focus:border-sage-700 dark:focus:border-sage-300
    transition duration-200 ease-in-out'
            : 'inline-flex items-center px-3 pt-2 pb-1 border-b-2 border-transparent
    text-sm font-medium leading-5 text-gray-600 dark:text-gray-400
    hover:text-gray-800 dark:hover:text-gray-200 hover:border-gray-300 dark:hover:border-gray-600
    focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:border-gray-300 dark:focus:border-gray-600
    transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
