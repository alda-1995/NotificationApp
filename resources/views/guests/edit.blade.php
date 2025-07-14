@extends('layouts.app')

@section('content')
    <div class="flex flex-col max-w-[640px]">
        <form action="{{ route('guests.update', $guest->guest_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap justify-between gap-3 py-4">
                <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Editar invitado</p>
            </div>
            <x-controls.error-main />
            <x-controls.validation-errors />
            {{-- Nombre --}}
            <x-controls.input type="text" name="name" placeholder="Nombre completo" label="Nombre"
                value="{{ old('name', $guest->name) }}" required autofocus />

            {{-- Teléfono --}}
            <x-controls.input type="text" name="phone_number" placeholder="Número de teléfono" label="Teléfono"
                value="{{ old('phone_number', $guest->phone_number) }}" required autofocus />

            {{-- Correo --}}
            <x-controls.input disabled type="email" name="email" placeholder="Correo electrónico" label="Correo electrónico"
                value="{{ old('email', $guest->email) }}" required autofocus />

            {{-- Preferencias de notificación --}}
            @php
                $preferences = old('notification', $guest->notification_preferences ?? []);
            @endphp

            <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] pb-2 pt-4">Preferencias de
                notificación</h3>
            <div class="block">
                <x-controls.checkbox-option name="notification" value="sms" label="SMS" :checked="in_array('sms', $preferences)" />
                <x-controls.checkbox-option name="notification" value="whatsapp" label="WhatsApp" :checked="in_array('whatsapp', $preferences)" />
                <x-controls.checkbox-option name="notification" value="email" label="Correo electrónico" :checked="in_array('email', $preferences)" />
            </div>
            {{-- Botones --}}
            <div class="flex gap-4 mt-8">
                <x-controls.button type="submit">Actualizar</x-controls.button>
                <x-controls.button href="{{ route('guests.index') }}" variant="secondary">
                    Cancelar
                </x-controls.button>
            </div>
        </form>
    </div>
@endsection