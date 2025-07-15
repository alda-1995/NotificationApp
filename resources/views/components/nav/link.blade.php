@props([
    'route' => null,
    'href'  => null,
    'icon'  => null,
])

@php
    // Construir la URL final
    $url = $href ?? ($route ? route($route) : '#');

    // Determinar si la ruta está activa
    $active = $route
        ? request()->routeIs($route)
        : request()->url() === $href;

    $activeStyles = $active
        ? 'active'
        : '';
@endphp

<a href="{{ $url }}"
   {{ $attributes->merge(['class' => "item-menu-nav $activeStyles"]) }}>
    @if ($icon)
        <x-dynamic-component :component="'icons.' . $icon" />
    @endif
    <span class="text-current">
        {{ $slot }}
    </span>
</a>