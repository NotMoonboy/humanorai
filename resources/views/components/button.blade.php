@props([
    'variant' => 'default', // default | alt | text
    'href' => null,
    'onclick' => null,
    'newTab' => false,
    'label' => 'Text Here',
    'width' => 'w-full',
    'disabled' => false,
    'type' => 'button',
])

@php
    $isLink = filled($href);
    $tag = $isLink ? 'a' : 'button';

    $variantClass = match ($variant) {
        'alt' => 'btn-chunky btn-chunky-alt',
        'text' => 'btn-text',
        default => 'btn-chunky',
    };

    $btnClass = trim("{$variantClass} {$width} " . ($disabled ? 'is-disabled' : ''));
@endphp

<{{ $tag }}
    @if ($isLink)
        href="{{ $href }}"
        @if ($newTab) target="_blank" rel="noopener noreferrer" @endif
    @else
        type="{{ $type }}"
        @if ($onclick) onclick="{{ $onclick }}" @endif
        @if ($disabled) disabled @endif
    @endif
    {{ $attributes->class([$btnClass]) }}
>
    {{ $slot->isEmpty() ? $label : $slot }}
</{{ $tag }}>