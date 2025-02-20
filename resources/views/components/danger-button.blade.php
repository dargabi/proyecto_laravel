<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-enterprise-blue border border-transparent rounded-md font-semibold text-xs text-enterprise-white uppercase tracking-widest hover:bg-enterprise-dark-blue active:bg-enterprise-black focus:outline-none focus:ring-2 focus:ring-enterprise-blue focus:ring-offset-2 dark:focus:ring-offset-enterprise-dark-gray transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
