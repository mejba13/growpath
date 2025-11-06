@props([
    'title' => null,
    'padding' => true,
    'shadow' => 'card',
])

@php
$classes = 'bg-white border border-neutral-200 rounded-card';
$classes .= $shadow === 'card' ? ' shadow-card hover:shadow-card-hover transition-shadow duration-300' : '';
$classes .= $shadow === 'none' ? '' : '';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($title)
        <div class="px-6 py-4 border-b border-neutral-200">
            <h3 class="text-lg font-semibold text-primary-brand">{{ $title }}</h3>
        </div>
    @endif

    <div class="{{ $padding ? 'p-6' : '' }}">
        {{ $slot }}
    </div>
</div>
