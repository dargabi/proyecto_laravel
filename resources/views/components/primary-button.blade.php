<button {{ $attributes->merge(['type' => 'submit', 'class' => '
    inline-flex items-center justify-center
    px-4 py-2
    bg-sage-600 dark:bg-sage-300
    border border-transparent
    rounded-md shadow-sm hover:shadow
    font-semibold text-xs text-white dark:text-gray-800
    uppercase tracking-widest
    hover:bg-sage-500 dark:hover:bg-sage-200
    focus:bg-sage-500 dark:focus:bg-sage-200
    active:bg-sage-700 dark:active:bg-sage-400
    focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800
    disabled:opacity-60 disabled:cursor-not-allowed
    transition ease-in-out duration-200
']) }}>
    {{ $slot }}
</button>
