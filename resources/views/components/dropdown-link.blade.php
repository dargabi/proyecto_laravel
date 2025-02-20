<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-enterprise-dark-gray dark:text-enterprise-light-gray hover:bg-enterprise-light-gray dark:hover:bg-enterprise-dark-gray focus:outline-none focus:bg-enterprise-light-gray dark:focus:bg-enterprise-dark-gray transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
