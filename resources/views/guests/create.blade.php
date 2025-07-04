@extends('layouts.app')

@section('content')
<div class="flex flex-col max-w-[960px]">
    <form action="{{ route('guests.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Crear invitado</p>
        </div>
        @if ($errors->has('general'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 mx-4 max-w-[480px]">
            <strong>Error:</strong> {{ $errors->first('general') }}
        </div>
        @endif
        {{-- Nombre --}}
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#121416] text-base font-medium leading-normal pb-2">Nombre</p>
                <input name="name"
                    placeholder="Nombre completo"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                    value="{{ old('name') }}" />
                @error('name')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        {{-- Teléfono --}}
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#121416] text-base font-medium leading-normal pb-2">Teléfono</p>
                <input name="phone_number"
                    placeholder="Número de teléfono"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                    value="{{ old('phone_number') }}" />
                @error('phone_number')
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        {{-- Correo --}}
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#121416] text-base font-medium leading-normal pb-2">Correo electrónico</p>
                <input name="email"
                    placeholder="Correo electrónico"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                    value="{{ old('email') }}" />
                @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </label>
        </div>
        {{-- Preferencias de notificación --}}
        <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Preferencias de notificación</h3>
        <div class="px-4">
            <label class="flex gap-x-3 py-3 flex-row">
                <input type="checkbox" name="notification[]" value="sms"
                    class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent focus:ring-0"
                    {{ is_array(old('notification')) && in_array('sms', old('notification')) ? 'checked' : '' }} />
                <p class="text-[#121416] text-base font-normal leading-normal">SMS</p>
            </label>
            <label class="flex gap-x-3 py-3 flex-row">
                <input type="checkbox" name="notification[]" value="whatsapp"
                    class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent focus:ring-0"
                    {{ is_array(old('notification')) && in_array('whatsapp', old('notification')) ? 'checked' : '' }} />
                <p class="text-[#121416] text-base font-normal leading-normal">WhatsApp</p>
            </label>
            <label class="flex gap-x-3 py-3 flex-row">
                <input type="checkbox" name="notification[]" value="email"
                    class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent focus:ring-0"
                    {{ is_array(old('notification')) && in_array('email', old('notification')) ? 'checked' : '' }} />
                <p class="text-[#121416] text-base font-normal leading-normal">Correo electrónico</p>
            </label>
        </div>
        {{-- Botones --}}
        <div class="flex gap-4 mt-8 px-4">
            <button type="submit"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Guardar</span>
            </button>
            <a href="{{ route('guests.index') }}"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Cancelar</span>
            </a>
        </div>
    </form>
</div>
@endsection