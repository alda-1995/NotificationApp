@props([
    'label' => '',
    'name' => '',
    'placeholder' => '',
    'value' => null,
])

@php
    // Resolver el contenido del textarea
    $content = old($name, $value);
@endphp

<label {{ $attributes->merge(['class' => 'flex flex-col min-w-40 flex-1 mb-4']) }}>
    @if ($label)
        <p class="text-[#111418] text-base font-medium leading-normal pb-2">
            {{ $label }}
        </p>
    @endif
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden
               rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none
               bg-[#f0f2f5] focus:border-none min-h-36
               placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">{{ $content }}</textarea>

    @error($name)
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</label>
