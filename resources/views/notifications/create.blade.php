@extends('layouts.app')
@section('content')
    <div class="flex flex-col max-w-[640px]">
        <form action="{{ route('notifications.store') }}" method="POST">
            @csrf
            <div class="flex min-w-72 flex-col mb-4">
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight mb-2">Crear Notificación</p>
                <p class="text-[#60758a] text-sm font-normal leading-normal">Define los detalles de la notificación que se
                    enviará a los usuarios.</p>
            </div>
            <x-controls.error-main />
            <x-controls.validation-errors />

            <x-controls.input type="text" name="title" placeholder="Ej: Recordatorio de Cita"
                label="Nombre de la Notificación" value="{{ old('title') }}" required autofocus />
            <x-controls.select name="type" label="Tipo de notificación" :options="[
                '' => 'Selecciona tipo',
                'immediate' => 'Inmediato',
                'scheduled' => 'Programado',
                'recurrent' => 'Recurrente',
            ]" />
            <x-controls.select name="channel" label="Canal de envío" :options="[
                '' => 'Selecciona canal',
                'sms' => 'SMS',
                'whatsapp' => 'WhatsApp',
                // 'Email' => 'Email',
            ]" required class="mt-4" />
            <x-controls.textarea name="message" label="Mensaje"
                placeholder="Escribe el mensaje que se enviará a los usuarios." />
            <x-controls.model-select value="group_id" text="name" name="group_id" label="Grupo de usuarios"
                :items="$groups" />
            <x-controls.date-input name="send_at" label="Fecha y hora de envío" type="date"
                placeholder="Selecciona fecha y hora" required />
            <div class="flex gap-4 mt-8">
                <x-controls.button type="submit">Enviar Notificación</x-controls.button>
                <x-controls.button href="{{ route('notifications.index') }}" variant="secondary">
                    Cancelar
                </x-controls.button>
            </div>
        </form>
    </div>
@endsection