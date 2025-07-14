@props([
    'name',
    'value',
    'label' => '',
    'checked' => false,
])

@php
    // Determina si debe marcarse desde old() si no se pasa explícitamente el checked
    $isChecked = $checked || (is_array(old($name)) && in_array($value, old($name)));
@endphp

<label class="flex gap-x-3 py-3 flex-row">
    <input
        type="checkbox"
        name="{{ $name }}[]"
        value="{{ $value }}"
        {{ $isChecked ? 'checked' : '' }}
        {{ $attributes->merge([
            'class' => 'h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent focus:ring-0'
        ]) }}
    />
    <p class="text-[#121416] text-base font-normal leading-normal">{{ $label ?: ucfirst($value) }}</p>
</label>