@props([
    'name' => '',
    'label' => '',
    'type' => 'date',
    'placeholder' => 'Selecciona fecha',
    'value' => null,
])

@php
    $selected = old($name, $value);
@endphp

<label {{ $attributes->merge(['class' => 'flex flex-col min-w-40 flex-1 mb-4']) }}>
    @if ($label)
        <p class="text-[#111418] text-base font-medium leading-normal pb-2">
            {{ $label }}
        </p>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $selected }}"
        placeholder="{{ $placeholder }}"
        class="datetime-picker form-input w-full rounded-lg bg-[#f0f2f5] h-14 px-4
               text-base placeholder:text-[#60758a] text-[#111418]
               border-none focus:outline-none focus:ring-0" />

    @error($name)
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</label>
