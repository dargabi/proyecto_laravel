@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-enterprise-dark-gray dark:text-enterprise-light-gray']) }}>
        {{ $status }}
    </div>
@endif
