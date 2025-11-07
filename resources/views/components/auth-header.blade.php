@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center mb-8 animate-fade-in">
    <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-neutral-900 to-neutral-700 bg-clip-text text-transparent mb-3">{{ $title }}</h1>
    <p class="text-base text-neutral-600 leading-relaxed">{{ $description }}</p>
</div>
