<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-enterprise-dark-gray dark:text-enterprise-light-gray mt-2']) }}>
    {{ $value ?? $slot }}
</label>
