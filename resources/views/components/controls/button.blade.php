@props([
    'href' => null,
    'type' => 'button',
    'variant' => 'primary',
])

@php
    // Paleta por variante
    $palette = [
        'primary'   => 'btn-primary',
        'secondary' => 'btn-secondary',
        'add' => 'btn-add',
        'remove' => 'btn-remove'
    ][$variant] ?? '';
@endphp


@if ($href)
    <a href="{{ $href }}"
       {{ $attributes->merge(['class' => "btn $palette"]) }}>
        <span class="truncate">{{ $slot }}</span>
    </a>
@else
    <button type="{{ $type }}"
            {{ $attributes->merge(['class' => "btn $palette"]) }}>
        <span class="truncate">{{ $slot }}</span>
    </button>
@endif