@props(['active' => false])

@php
    $classes = 'block text-left lg:px-5 lg:py-1 sm:px-8 sm:py-8 lg:text-base sm:text-4xl leading-6 hover:bg-blue-500 focus:bg-blue-500 
                hover:text-white focus:text-white';

    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
