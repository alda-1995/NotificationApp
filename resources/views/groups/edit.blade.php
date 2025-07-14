@extends('layouts.app')
@section('content')
    <form action="{{ route('groups.update', $group->group_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-col max-w-[640px]">
            <div class="flex flex-wrap gap-2 py-4">
                <a class="text-[#60768a] text-base font-medium leading-normal" href="{{ route('groups.index') }}">Grupos</a>
                <span class="text-[#60768a] text-base font-medium leading-normal">/</span>
                <span class="text-[#111518] text-base font-medium leading-normal">Editar grupo</span>
            </div>

            <div class="flex flex-wrap justify-between gap-3 py-4">
                <div class="flex min-w-72 flex-col gap-3">
                    <p class="text-[#111518] text-[32px] font-bold">Editar grupo</p>
                    <p class="text-[#60768a] text-sm">Modifica la información del grupo o añade/elimina usuarios.</p>
                </div>
            </div>
            <x-controls.error-main />
            <x-controls.validation-errors />

            <x-controls.input type="text" name="name" placeholder="Ej. Equipo de marketing" label="Nombre del grupo"
                value="{{ old('name', $group->name) }}" required autofocus />

            {{-- Lista de invitados --}}
            <div id="guestList">
                @forelse ($guests as $guest)
                    <div class="guest-item flex items-center gap-4 bg-white min-h-[72px] py-2 justify-between border-b border-[#f0f2f5]"
                        data-name="{{ strtolower($guest->name) }}" data-phone="{{ $guest->phone_number }}">
                        <div class="flex items-center gap-4">
                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-14"
                                style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode($guest->name) }}&background=random");'>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-[#111518] text-base font-medium leading-normal">{{ $guest->name }}</p>
                                <p class="text-[#60768a] text-sm font-normal leading-normal">{{ $guest->phone_number }}</p>
                            </div>
                        </div>
                        <div class="shrink-0">
                            <input type="checkbox" name="guest_ids[]" value="{{ $guest->guest_id }}"
                                class="h-5 w-5 rounded border-[#dbe1e6] border-2 bg-transparent text-[#0b80ee] checked:bg-[#0b80ee] checked:border-[#0b80ee] focus:ring-0"
                                {{ in_array($guest->guest_id, $selectedGuestIds ?? []) ? 'checked' : '' }}>
                        </div>
                    </div>
                @empty
                    <p class="py-4 text-[#60768a] text-sm">No hay invitados disponibles.</p>
                @endforelse
            </div>
            <div class="flex gap-4 mt-8">
                <x-controls.button type="submit">Guardar</x-controls.button>
                <x-controls.button href="{{ route('groups.show', $group->group_id) }}" variant="secondary">
                    Cancelar
                </x-controls.button>
            </div>
        </div>
    </form>
@endsection