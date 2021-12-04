@props(['active'])

@php
$classes = ($active ?? false)
            ? "border-b-2 border-gray-800 pb-2 text-xs text-gray-800 md:pb-0 link-nav link--mont text-blue-500"
            : "pb-2 text-xs text-gray-800 md:pb-0 link-nav link--mont hover:text-blue-500 focus:outline-none focus:text-blue-500"
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
