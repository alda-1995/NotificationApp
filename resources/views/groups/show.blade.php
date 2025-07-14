@extends('layouts.app')
@section('content')
    <!-- Modal de confirmación -->
    <x-modals.confirm-modal id="confirm-delete" title="¿Eliminar grupo?" :message="'¿Estás seguro de que deseas eliminar el grupo <strong>' .
        $group->name .
        '</strong>? Esta acción no se puede deshacer.'"
        :action="route('groups.destroy', $group->group_id)" confirm-text="Eliminar" />

    <div class="flex flex-col max-w-[960px]">
        <div class="flex flex-wrap gap-2 py-4">
            <a class="text-[#6a7681] text-base font-medium leading-normal" href="{{ route('groups.index') }}">Grupos</a>
            <span class="text-[#6a7681] text-base font-medium leading-normal">/</span>
            <span class="text-[#121416] text-base font-medium leading-normal">{{ $group->name }}</span>
        </div>
        <div class="flex flex-wrap justify-between gap-3 py-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight">{{ $group->name }}</p>
                <p class="text-[#6a7681] text-sm font-normal leading-normal">Gestiona los miembros de este grupo</p>
            </div>
        </div>
        <h2 class="text-[#121416] text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-5">Miembros del Grupo</h2>
        <div class="py-3">
            <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
                <table class="flex-1">
                    <thead>
                        <tr class="bg-white">
                            <th
                                class="table-1cf82bb8-808c-49ec-b05f-f76f630d80a4-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                Nombre</th>
                            <th
                                class="table-1cf82bb8-808c-49ec-b05f-f76f630d80a4-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                Email</th>
                            <th
                                class="table-1cf82bb8-808c-49ec-b05f-f76f630d80a4-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                Teléfono
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $member)
                            <tr class="border-t border-t-[#dde1e3]">
                                <td class="h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                                    {{ $member->name }}
                                </td>
                                <td class="h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                    {{ $member->email }}
                                </td>
                                <td class="h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                                    {{ $member->phone_number }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-sm text-gray-500 py-4">
                                    No hay miembros en este grupo.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex justify-stretch">
            <div class="flex flex-1 gap-3 flex-wrap py-3 justify-end">
                <x-controls.button href="{{ route('groups.edit', $group->group_id) }}" variant="add">
                    Editar Grupo
                </x-controls.button>
                <x-controls.button variant="remove" data-modal="confirm-delete" class="open-modal-btn">Eliminar Grupo</x-controls.button>
            </div>
        </div>
    </div>
@endsection
