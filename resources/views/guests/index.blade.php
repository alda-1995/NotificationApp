@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 py-4">
        <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Invitados</p>
        <a href="{{ route('guests.create') }}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal">
            <span class="truncate">Añadir invitado</span>
        </a>
    </div>
    <div class="py-3">
        <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div
                    class="text-[#6a7681] flex border-none bg-[#f1f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                </div>
                <input
                    placeholder="Buscar invitados"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-full placeholder:text-[#6a7681] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
            </div>
        </label>
    </div>
    <div class="py-3">
        <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
            <table class="flex-1">
                <thead>
                    <tr class="bg-white">
                        <th class="px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Nombre</th>
                        <th class="px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Correo</th>
                        <th class="px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Teléfono</th>
                        <th class="px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">Preferencias</th> <!-- Nueva columna -->
                        <th class="px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guests as $guest)
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            {{ $guest->name }}
                        </td>
                        <td class="h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            {{ $guest->email }}
                        </td>
                        <td class="h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            {{ $guest->phone_number }}
                        </td>
                        <td class="h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-normal leading-normal">
                            @if (!empty($guest->notification_preferences) && is_array($guest->notification_preferences))
                            {{ implode(', ', $guest->notification_preferences) }}
                            @else
                            No definidas
                            @endif
                        </td>
                        <td class="h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            <a href="{{ route('guests.show', $guest->guest_id) }}" class="hover:underline">Ver detalle</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-[#6a7681]">No hay invitados registrados.</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection