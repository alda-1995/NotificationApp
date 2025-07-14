@extends('layouts.app')

@section('content')
    <div class="flex flex-col max-w-[640px]">
        <form action="{{ route('guests.store') }}" method="POST">
            @csrf
            <div class="flex flex-wrap justify-between gap-3 py-4">
                <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Crear invitado</p>
            </div>
            <x-controls.error-main />
            <x-controls.validation-errors />
            {{-- Nombre --}}
            <x-controls.input type="text" name="name" placeholder="Nombre completo" label="Nombre"
                value="{{ old('name') }}" required autofocus />
            {{-- Teléfono --}}
            <x-controls.input type="text" name="phone_number" placeholder="Número de teléfono" label="Teléfono"
                value="{{ old('phone_number') }}" required autofocus />
            {{-- Correo --}}
            <x-controls.input type="email" name="email" placeholder="Correo electrónico" label="Correo electrónico"
                value="{{ old('email') }}" required autofocus />
            {{-- Preferencias de notificación --}}
            <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] pb-2 pt-4">Preferencias de
                notificación</h3>
            <div class="block">
                <x-controls.checkbox-option name="notification" value="sms" label="SMS" />
                <x-controls.checkbox-option name="notification" value="whatsapp" label="WhatsApp" />
                <x-controls.checkbox-option name="notification" value="email" label="Correo electrónico" />
            </div>
            {{-- Botones --}}
            <div class="flex gap-4 mt-8">
                <x-controls.button type="submit">Guardar</x-controls.button>
                <x-controls.button href="{{ route('guests.index') }}" variant="secondary">
                    Cancelar
                </x-controls.button>
            </div>
        </form>
    </div>
@endsection