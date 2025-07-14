@props([
    'label' => '',
    'name' => '',
    'id' => '',
    'value' => '',
    'type' => 'text',
    'required' => false,
    'autofocus' => false,
    'disabled' => false,
    'placeholder' => '',
])

<label {{ $attributes->merge(['class' => 'flex flex-col min-w-40 flex-1 mb-4']) }}>
    <p class="text-[#121416] text-base font-medium leading-normal pb-2">{{ $label }}</p>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" @if ($autofocus) autofocus @endif @if ($disabled) disabled @endif placeholder="{{ $placeholder }}"
        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal disabled:opacity-30 disabled:pointer-events-none"
        value="{{ old($name, $value) }}" />
    @error($name)
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</label>