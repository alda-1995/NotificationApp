@extends('layouts.app')
@section('content')
<div class="flex flex-col max-w-[960px]">
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Crear invitado</p>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#121416] text-base font-medium leading-normal pb-2">Name</p>
            <input
                placeholder="Enter user name"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                value="" />
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#121416] text-base font-medium leading-normal pb-2">Phone</p>
            <input
                placeholder="Enter phone number"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                value="" />
        </label>
    </div>
    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
        <label class="flex flex-col min-w-40 flex-1">
            <p class="text-[#121416] text-base font-medium leading-normal pb-2">Email</p>
            <input
                placeholder="Enter email address"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border-none bg-[#f1f2f4] focus:border-none h-14 placeholder:text-[#6a7681] p-4 text-base font-normal leading-normal"
                value="" />
        </label>
    </div>
    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Notification Preferences</h3>
    <div class="px-4">
        <label class="flex gap-x-3 py-3 flex-row">
            <input
                type="checkbox"
                class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent text-[#dce8f3] checked:bg-[#dce8f3] checked:border-[#dce8f3] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dde1e3] focus:outline-none" />
            <p class="text-[#121416] text-base font-normal leading-normal">SMS</p>
        </label>
        <label class="flex gap-x-3 py-3 flex-row">
            <input
                type="checkbox"
                class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent text-[#dce8f3] checked:bg-[#dce8f3] checked:border-[#dce8f3] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dde1e3] focus:outline-none" />
            <p class="text-[#121416] text-base font-normal leading-normal">WhatsApp</p>
        </label>
        <label class="flex gap-x-3 py-3 flex-row">
            <input
                type="checkbox"
                class="h-5 w-5 rounded border-[#dde1e3] border-2 bg-transparent text-[#dce8f3] checked:bg-[#dce8f3] checked:border-[#dce8f3] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dde1e3] focus:outline-none" />
            <p class="text-[#121416] text-base font-normal leading-normal">Email</p>
        </label>
    </div>
    <div class="flex gap-4 mt-8">
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Guardar</span>
        </button>
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Cancelar</span>
        </button>
    </div>
</div>
@endsection