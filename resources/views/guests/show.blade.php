@extends('layouts.app')

@section('content')
<!-- Modal de confirmación -->
<x-modals.confirm-modal
    id="confirm-delete"
    title="¿Eliminar invitado?"
    :message="'¿Estás seguro de que deseas eliminar el invitado <strong>' . $guest->name . '</strong>? Esta acción no se puede deshacer.'"
    :action="route('guests.destroy', $guest->guest_id)"
    confirm-text="Eliminar"
/>
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap gap-2 py-4">
        <a class="text-[#6a7681] text-base font-medium leading-normal" href="{{ route('guests.index') }}">Invitados</a>
        <span class="text-[#6a7681] text-base font-medium leading-normal">/</span>
        <span class="text-[#121416] text-base font-medium leading-normal">{{ $guest->name }}</span>
    </div>

    <div class="flex flex-wrap justify-between gap-3 py-4">
        <div class="flex min-w-72 flex-col gap-3">
            <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight">Detalles del invitado</p>
            <p class="text-[#6a7681] text-sm font-normal leading-normal">Ver y administrar la información del invitado</p>
        </div>
    </div>

    {{-- Información de contacto --}}
    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] pb-2 pt-4">Información del contacto</h3>
    <div class="py-4 grid grid-cols-[20%_1fr] gap-x-6">
        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">Nombre</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">{{ $guest->name }}</p>
        </div>
        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">Correo electrónico</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">{{ $guest->email }}</p>
        </div>
        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">Teléfono</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">{{ $guest->phone_number }}</p>
        </div>
    </div>

    {{-- Preferencias de notificación --}}
    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] pb-2 pt-4">Preferencias de notificación</h3>
    <div class="py-4 grid grid-cols-[20%_1fr] gap-x-6">

        @php
            $preferences = is_array($guest->notification_preferences) 
                ? $guest->notification_preferences 
                : json_decode($guest->notification_preferences ?? '[]', true);
        @endphp

        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">SMS</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">
                {{ in_array('sms', $preferences) ? 'Activado' : 'Desactivado' }}
            </p>
        </div>
        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">WhatsApp</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">
                {{ in_array('whatsapp', $preferences) ? 'Activado' : 'Desactivado' }}
            </p>
        </div>
        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#dde1e3] py-5">
            <p class="text-[#6a7681] text-sm font-normal leading-normal">Correo electrónico</p>
            <p class="text-[#121416] text-sm font-normal leading-normal">
                {{ in_array('email', $preferences) ? 'Activado' : 'Desactivado' }}
            </p>
        </div>
    </div>

    <div class="flex justify-stretch">
        <div class="flex flex-1 gap-3 flex-wrap py-3 justify-end">
            <a href="{{ route('guests.edit', $guest->guest_id) }}"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Editar Invitado</span>
            </a>
            <button
                class="cursor-pointer open-modal-btn flex min-w-[84px] max-w-[480px] items-center justify-center rounded-full h-10 px-4 bg-[#dce8f3] text-[#121416] text-sm font-bold"
                data-modal="confirm-delete">
                Eliminar Invitado
            </button>
        </div>
    </div>
</div>
@endsection