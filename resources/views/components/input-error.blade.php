@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-enterprise-dark-gray dark:text-enterprise-light-gray space-y-1', 'aria-live' => 'assertive']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
