@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Plantillas</p>
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal">
            <span class="truncate">Crear plantilla</span>
        </button>
    </div>
    <div class="px-4 py-3 @container">
        <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
            <table class="flex-1">
                <thead>
                    <tr class="bg-white">
                        <th class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Nombre</th>
                        <th class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Tipo</th>
                        <th class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Canal</th>
                        <th class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-480 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Recordatorio de pago
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            Recordatorio
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">SMS</td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-480 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Notificación de bienvenida
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            Bienvenida
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            Correo electrónico
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-480 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Actualización de estado
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            Actualización
                        </td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">WhatsApp</td>
                        <td class="table-47e619e0-249d-40a2-abcd-9f2cc302b616-column-480 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection