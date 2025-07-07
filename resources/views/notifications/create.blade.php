@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <form action="{{ route('notifications.store') }}" method="POST">
        @csrf
        <div class="flex min-w-72 flex-col mb-4">
            <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight mb-2">Crear Notificación</p>
            <p class="text-[#60758a] text-sm font-normal leading-normal">Define los detalles de la notificación que se enviará a los usuarios.</p>
        </div>
        @if ($errors->has('general'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 mx-4 max-w-[480px]">
            <strong>Error:</strong> {{ $errors->first('general') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <strong>Oops! Hubo algunos errores:</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="flex max-w-[480px] flex-wrap items-end py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Nombre de la Notificación</p>
                <input
                    name="title"
                    placeholder="Ej: Recordatorio de Cita"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 placeholder:text-[#60758a] p-4 text-base font-normal leading-normal"
                    value="{{ old('title') }}" />
                @error('title')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex max-w-[480px] flex-wrap items-end py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Tipo de Notificación</p>
                <select name="type" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                    <option value="">Selecciona tipo</option>
                    <option value="info" {{ old('type') == 'info' ? 'selected' : '' }}>Informativo</option>
                    <option value="alerta" {{ old('type') == 'alerta' ? 'selected' : '' }}>Alerta</option>
                    <option value="recordatorio" {{ old('type') == 'recordatorio' ? 'selected' : '' }}>Recordatorio</option>
                </select>
                @error('type')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Canal de Envío</p>
                <select name="channel"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                    <option value="">Selecciona canal</option>
                    <option value="SMS" {{ old('channel') == 'SMS' ? 'selected' : '' }}>SMS</option>
                    <option value="WhatsApp" {{ old('channel') == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                    <option value="Email" {{ old('channel') == 'Email' ? 'selected' : '' }}>Email</option>
                </select>
                @error('channel')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Mensaje</p>
                <textarea
                    name="message"
                    placeholder="Escribe el mensaje que se enviará a los usuarios."
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none min-h-36 placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">{{ old('message') }}</textarea>
                @error('message')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Grupo de Usuarios</p>
                <select name="group_id"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                    <option value="">Selecciona grupo</option>
                    @foreach ($groups as $group)
                    <option value="{{ $group->group_id }}" {{ old('group_id') == $group->group_id ? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
                @error('group_id')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111418] text-base font-medium leading-normal pb-2">Fecha y Hora de Envío</p>
                <input
                    type="date"
                    name="send_at"
                    class="datetime-picker form-input w-full rounded-lg bg-[#f0f2f5] h-14 px-4 text-base placeholder:text-[#60758a] text-[#111418] border-none focus:outline-none focus:ring-0"
                    placeholder="Selecciona fecha y hora">
                @error('send_at')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="flex gap-4 mt-8">
            <button
                type="submit"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Enviar Notificación</span>
            </button>
            <a href="{{ route('notifications.index') }}"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Cancelar</span>
            </a>
        </div>
    </form>
</div>
@endsection