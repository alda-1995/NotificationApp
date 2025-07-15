@props([
    'label' => '',
    'name',
    'items' => collect(),
    /* Atributo/clave a usar como value y como texto */
    'value' => 'id',
    'text' => 'name',
    'selected' => null,
    'placeholder' => 'Seleccione una opción',
])

@php
    $valueSelected = old($name, $selected);

    $options = $items
        ->mapWithKeys(
            fn($item) => [
                data_get($item, $value) => data_get($item, $text),
            ],
        )
        ->all();

    if (!array_key_exists('', $options)) {
        $options = ['' => $placeholder] + $options;
    }
@endphp

<label {{ $attributes->merge(['class' => 'flex flex-col min-w-40 flex-1 mb-4']) }}>
    @if ($label)
        <p class="text-[#111418] text-base font-medium leading-normal pb-2">{{ $label }}</p>
    @endif

    <div class="relative">
        <select name="{{ $name }}" class="selected-input">
            @foreach ($options as $optValue => $optLabel)
                <option value="{{ $optValue }}" @selected((string) $valueSelected === (string) $optValue)>
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