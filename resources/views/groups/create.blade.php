@extends('layouts.app')

@section('content')
    <div class="flex flex-col max-w-[640px]">
        <form action="{{ route('groups.store') }}" method="POST">
            @csrf
            {{-- Título --}}
            <div class="flex flex-wrap justify-between gap-3 py-4">
                <p class="text-[#111518] tracking-light text-[32px] font-bold leading-tight min-w-72">Crear grupo</p>
            </div>
            <x-controls.error-main />
            <x-controls.validation-errors />
            {{-- Nombre del grupo --}}
            <x-controls.input type="text" name="name" placeholder="Ej. Equipo de marketing" label="Nombre del grupo"
                value="{{ old('name') }}" required autofocus />
            {{-- Buscador de invitados --}}
            <h3 class="text-[#111518] text-lg font-bold leading-tight tracking-[-0.015em] pb-2 pt-4">Miembros del grupo</h3>
            <div class="py-3">
                <label class="flex flex-col min-w-40 h-12 w-full">
                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                        <div
                            class="text-[#60768a] flex border-none bg-[#f0f2f5] items-center justify-center pl-4 rounded-l-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" id="guestSearchInput" placeholder="Buscar miembros por nombre o teléfono"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] h-full placeholder:text-[#60768a] px-4 rounded-l-none" />
                    </div>
                </label>
            </div>
            {{-- Lista de invitados --}}
            <div id="guestList" class="max-h-[300px] overflow-y-auto">
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
                                class="h-5 w-5 rounded border-[#dbe1e6] border-2 bg-transparent text-[#0b80ee] checked:bg-[#0b80ee] checked:border-[#0b80ee] focus:ring-0" />
                        </div>
                    </div>
                @empty
                    <p class="px-4 py-4 text-[#60768a] text-sm">No hay invitados disponibles.</p>
                @endforelse
            </div>
            {{-- Botones --}}
            <div class="flex gap-4 mt-8">
                <x-controls.button type="submit">Guardar</x-controls.button>
                <x-controls.button href="{{ route('groups.index') }}" variant="secondary">
                    Cancelar
                </x-controls.button>
            </div>
        </form>
    </div>

    {{-- Script para filtrar invitados --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('guestSearchInput');
            const guestItems = document.querySelectorAll('.guest-item');

            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();

                guestItems.forEach(item => {
                    const name = item.dataset.name;
                    const phone = item.dataset.phone;
                    const match = name.includes(query) || phone.includes(query);
                    item.style.display = match ? 'flex' : 'none';
                });
            });
        });
    </script>
@endsection