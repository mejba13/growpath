@props([
    'variant' => 'primary', // primary, secondary, tertiary, danger
    'size' => 'md', // sm, md, lg
    'type' => 'button',
    'href' => null,
])

@php
$baseClasses = 'inline-flex items-center justify-center font-semibold rounded-md transition-all duration-200 focus:outline-none focus:ring-3 focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed';

$sizeClasses = [
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-base',
    'lg' => 'px-8 py-4 text-lg',
];

$variantClasses = [
    'primary' => 'bg-primary-accent text-white hover:bg-blue-600 active:bg-blue-700 focus:ring-primary-accent',
    'secondary' => 'border-2 border-primary-accent text-primary-accent bg-transparent hover:bg-primary-accent hover:text-white focus:ring-primary-accent',
    'tertiary' => 'text-neutral-700 bg-transparent hover:bg-neutral-100 focus:ring-neutral-300',
    'danger' => 'bg-error text-white hover:bg-red-600 active:bg-red-700 focus:ring-error',
];

$classes = $baseClasses . ' ' . $sizeClasses[$size] . ' ' . $variantClasses[$variant];
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
