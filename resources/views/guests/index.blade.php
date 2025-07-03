@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Usuarios</p>
        <a href="{{ route('guests.create') }}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal">
            <span class="truncate">Añadir usuario</span>
        </a>
    </div>
    <div class="px-4 py-3">
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
                    placeholder="Buscar usuarios"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-full placeholder:text-[#6a7681] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
            </div>
        </label>
    </div>
    <div class="px-4 py-3 @container">
        <div class="flex overflow-hidden rounded-xl border border-[#dde1e3] bg-white">
            <table class="flex-1">
                <thead>
                    <tr class="bg-white">
                        <th class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Nombre</th>
                        <th class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">Email</th>
                        <th class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                            Teléfono
                        </th>
                        <th class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-480 px-4 py-3 text-left text-[#121416] w-60 text-sm font-medium leading-normal">Estado</th>
                        <th class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-600 px-4 py-3 text-left text-[#121416] w-60 text-[#6a7681] text-sm font-medium leading-normal">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Sofía Rodríguez
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            sofia.rodriguez@example.com
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            +34 666 777 888
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activo</span>
                            </button>
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-600 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Ver detalles
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Carlos Pérez
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            carlos.perez@example.com
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            +34 655 444 333
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Inactivo</span>
                            </button>
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-600 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Ver detalles
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Ana García
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            ana.garcia@example.com
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            +34 644 333 222
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activo</span>
                            </button>
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-600 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Ver detalles
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#dde1e3]">
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-120 h-[72px] px-4 py-2 w-[400px] text-[#121416] text-sm font-normal leading-normal">
                            Javier López
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            javier.lopez@example.com
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7681] text-sm font-normal leading-normal">
                            +34 633 222 111
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f1f2f4] text-[#121416] text-sm font-medium leading-normal w-full">
                                <span class="truncate">Activo</span>
                            </button>
                        </td>
                        <td class="table-fc1ab25d-e096-43e9-8bcf-0273b9e5ae73-column-600 h-[72px] px-4 py-2 w-60 text-[#6a7681] text-sm font-bold leading-normal tracking-[0.015em]">
                            Ver detalles
                        </td>
                    </tr>           
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection