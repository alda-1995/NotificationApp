@extends('layouts.app')

@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#111518] text-[32px] font-bold leading-tight">Grupos</p>
        <a href="{{ route('groups.create') }}"
            class="flex items-center justify-center h-8 px-4 rounded-full bg-[#f0f2f5] text-[#111518] text-sm font-medium">
            Nuevo grupo
        </a>
    </div>

    <div class="px-4 py-3">
        <div class="overflow-hidden rounded-xl border border-[#dbe1e6] bg-white">
            <table class="w-full">
                <thead>
                    <tr class="bg-white text-left text-sm font-medium text-[#111518]">
                        <th class="px-4 py-3 w-[300px]">Nombre</th>
                        <th class="px-4 py-3 w-[300px]">Descripción</th>
                        <th class="px-4 py-3 w-[200px]">Miembros</th>
                        <th class="px-4 py-3 w-[200px]">Creado</th>
                        <th class="px-4 py-3 w-[150px] text-[#60768a]">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($groups as $group)
                        <tr class="border-t border-[#dbe1e6] text-sm">
                            <td class="px-4 py-3 text-[#111518]">{{ $group->name }}</td>
                            <td class="px-4 py-3 text-[#60768a]">—</td> {{-- si agregas description, cámbialo --}}
                            <td class="px-4 py-3 text-[#60768a]">{{ $group->guests_count }}</td>
                            <td class="px-4 py-3 text-[#60768a]">{{ $group->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-3 text-[#0c7ff2] font-bold">
                                <a href="#">Ver</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-[#60768a]">No hay grupos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection