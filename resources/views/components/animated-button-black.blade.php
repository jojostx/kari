
@php
$classes="px-4 py-2 text-sm font-semibold border-2 lg:text-base animated-a lg:px-8 lg:py-3"
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}
 >
  <span>{{ $slot }}</span>
</a>