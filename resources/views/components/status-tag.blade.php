@props(['tag' => 'undefined', 'stat' => 0, 'color' => 'blue'])

<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-{{ $color }}-100 cursor-text hover:no-underline text-{{ $color }}-600 focus:no-underline">
  {{ $tag }} &nbsp; &nbsp; {{ $stat }}
</span>