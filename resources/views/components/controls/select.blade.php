@props([
    'label' => '',
    'name' => '',
    'options' => [],
    'selected' => null,
    'placeholder' => 'Seleccione una opción',
])

@php
    // Resolver valor seleccionado: primero old(), luego prop selected
    $value = old($name, $selected);

    // Construir lista final de opciones
    $items = $options;

    // Si el placeholder todavía no existe, lo añadimos al principio
    if (!array_key_exists('', $items)) {
        $items = ['' => $placeholder] + $items;
    }

    // Estilos base
    $labelClasses = 'flex flex-col min-w-40 flex-1';
@endphp

<label {{ $attributes->merge(['class' => 'flex flex-col min-w-40 flex-1 mb-4']) }}>
    @if ($label)
        <p class="text-[#111418] text-base font-medium leading-normal pb-2">
            {{ $label }}
        </p>
    @endif
    <div class="relative">
        <select
            name="{{ $name }}"
            class="selected-input"
        >
            @foreach ($items as $optValue => $optLabel)
                <option
                    value="{{ $optValue }}"
                    @selected($value === (string) $optValue)
                >
                    {{ $optLabel }}
                </option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2">
            <x-icons.arrow-down />
        </div>
    </div>

    @error($name)
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</label>