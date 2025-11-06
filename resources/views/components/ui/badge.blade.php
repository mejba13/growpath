@props([
    'variant' => 'default', // default, success, warning, error, info
    'size' => 'md', // sm, md, lg
])

@php
$sizeClasses = [
    'sm' => 'px-2 py-0.5 text-xs',
    'md' => 'px-3 py-1 text-sm',
    'lg' => 'px-4 py-1.5 text-base',
];

$variantClasses = [
    'default' => 'bg-neutral-100 text-neutral-700',
    'success' => 'bg-green-100 text-green-800',
    'warning' => 'bg-amber-100 text-amber-800',
    'error' => 'bg-red-100 text-red-800',
    'info' => 'bg-blue-100 text-blue-800',
];

$classes = 'inline-flex items-center font-medium rounded-full ' . $sizeClasses[$size] . ' ' . $variantClasses[$variant];
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
