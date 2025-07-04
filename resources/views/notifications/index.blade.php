@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#111518] tracking-light text-[32px] font-bold leading-tight min-w-72">Notificaciones</p>
        <a href="{{ route('notifications.create') }}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal">
            <span class="truncate">Nueva notificación</span>
        </a>
    </div>
    <div class="px-4 py-3">
        <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div
                    class="text-[#60768a] flex border-none bg-[#f0f2f5] items-center justify-center pl-4 rounded-l-xl border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                </div>
                <input
                    placeholder="Buscar notificaciones"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-full placeholder:text-[#60768a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
            </div>
        </label>
    </div>
    <div class="px-4 py-3 @container">
        <div class="flex overflow-hidden rounded-xl border border-[#dbe1e6] bg-white">
            <table class="flex-1">
                <thead>
                    <tr class="bg-white">
                        <th class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">Nombre</th>
                        <th class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">Tipo</th>
                        <th class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 px-4 py-3 text-left text-[#111518] w-60 text-sm font-medium leading-normal">Estado</th>
                        <th class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">
                            Fecha de creación
                        </th>
                        <th class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 px-4 py-3 text-left text-[#111518] w-60 text-[#60768a] text-sm font-medium leading-normal">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                            Notificación de bienvenida
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Correo electrónico
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activa</span>
                            </button>
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-08-15
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                            Recordatorio de pago
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">SMS</td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Inactiva</span>
                            </button>
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-07-22
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                            Actualización de perfil
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">WhatsApp</td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activa</span>
                            </button>
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-06-10
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                            Notificación de cumpleaños
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            Correo electrónico
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activa</span>
                            </button>
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-05-01
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dbe1e6]">
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                            Promoción especial
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">SMS</td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Inactiva</span>
                            </button>
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-480 h-[72px] px-4 py-2 w-[400px] text-[#60768a] text-sm font-normal leading-normal">
                            2023-04-18
                        </td>
                        <td class="table-a6737222-15e8-480a-943e-56da9c3c3f5e-column-600 h-[72px] px-4 py-2 w-60 text-[#60768a] text-sm font-bold leading-normal tracking-[0.015em]">
                            Editar
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection