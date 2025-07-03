@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex min-w-72 flex-col mb-4">
        <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight mb-2">Crear Notificación</p>
        <p class="text-[#60758a] text-sm font-normal leading-normal">Define los detalles de la notificación que se enviará a los usuarios.</p>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Nombre de la Notificación</p>
            <input
                placeholder="Ej: Recordatorio de Cita"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 placeholder:text-[#60758a] p-4 text-base font-normal leading-normal"
                value="" />
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Tipo de Notificación</p>
            <select
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                <option value="one"></option>
                <option value="two">two</option>
                <option value="three">three</option>
            </select>
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Canal de Envío</p>
            <select
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                <option value="one"></option>
                <option value="two">two</option>
                <option value="three">three</option>
            </select>
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Mensaje</p>
            <textarea
                placeholder="Escribe el mensaje que se enviará a los usuarios."
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none min-h-36 placeholder:text-[#60758a] p-4 text-base font-normal leading-normal"></textarea>
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Plantilla</p>
            <select
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                <option value="one"></option>
                <option value="two">two</option>
                <option value="three">three</option>
            </select>
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Grupo de Usuarios</p>
            <select
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                <option value="one"></option>
                <option value="two">two</option>
                <option value="three">three</option>
            </select>
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#111418] text-base font-medium leading-normal pb-2">Fecha y Hora de Envío</p>
            <select
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#60758a] p-4 text-base font-normal leading-normal">
                <option value="one"></option>
                <option value="two">two</option>
                <option value="three">three</option>
            </select>
        </label>
    </div>
    <div class="flex gap-4 mt-8">
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Cancelar</span>
        </button>
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Crear Notificación</span>
        </button>
    </div>
</div>
@endsection