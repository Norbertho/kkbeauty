@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase items-center px-1 pt-1 border-b-4 border-indigo-400 font-medium leading-5 text-puder focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex uppercase items-center px-1 pt-1 border-b-4 border-transparent hover:text-dpuder font-medium leading-5 text-puder hover:border-dpuder focus:outline-none focus:text-puder focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
