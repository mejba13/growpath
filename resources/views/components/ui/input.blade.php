@props([
    'label' => null,
    'name' => '',
    'type' => 'text',
    'error' => null,
    'required' => false,
    'helpText' => null,
])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-neutral-700 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-error">*</span>
            @endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'w-full px-4 py-3 border rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-3 focus:ring-opacity-50 ' .
            ($error ? 'border-error focus:border-error focus:ring-error' : 'border-neutral-300 focus:border-primary-accent focus:ring-primary-accent')
        ]) }}
    >

    @if($error)
        <p class="mt-1 text-sm text-error">{{ $error }}</p>
    @endif

    @if($helpText && !$error)
        <p class="mt-1 text-sm text-neutral-500">{{ $helpText }}</p>
    @endif
</div>
