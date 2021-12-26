@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-400 focus:border-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50']) !!}>
