@extends('layouts.app')
@section('content')
<div class="layout-content-container flex flex-col max-w-[960px]">
  <div class="flex flex-wrap justify-between gap-3 py-4">
    <div class="flex min-w-72 flex-col gap-3">
      <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight">Dashboard</p>
      <p class="text-[#60758a] text-sm font-normal leading-normal">Descripción general de las métricas clave y los datos de uso</p>
    </div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 py-4">
    <!-- <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#dbe0e6]">
      <p class="text-[#111418] text-base font-medium leading-normal">Total Users</p>
      <p class="text-[#111418] tracking-light text-2xl font-bold leading-tight">1,250</p>
    </div>
    <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#dbe0e6]">
      <p class="text-[#111418] text-base font-medium leading-normal">Active Users (Last 30 Days)</p>
      <p class="text-[#557caf] tracking-light text-2xl font-bold leading-tight">875</p>
    </div> -->
    <div class="flex min-w-[158px] flex-col gap-2 rounded-lg p-6 border border-[#dbe0e6]">
      <p class="text-[#111418] text-base font-medium leading-normal">Notificaciones enviadas (últimos 7 días)</p>
      <p class="text-[#111418] tracking-light text-2xl font-bold leading-tight">3</p>
    </div>
  </div>
  <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-5">Uso de los canales de notificación</h2>
  <div class="flex flex-wrap gap-4 py-6">
    <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-lg border border-[#dbe0e6] p-6">
      <p class="text-[#111418] text-base font-medium leading-normal">Uso del canal</p>
      <div class="grid min-h-[180px] gap-x-4 gap-y-6 grid-cols-[auto_1fr] items-center py-3">
        <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">SMS</p>
        <div class="h-full flex-1">
          <div class="border-[#60758a] bg-[#f0f2f5] border-r-2 h-full" style="width: 80%;"></div>
        </div>
        <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Email</p>
        <div class="h-full flex-1">
          <div class="border-[#60758a] bg-[#f0f2f5] border-r-2 h-full" style="width: 30%;"></div>
        </div>
        <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">WhatsApp</p>
        <div class="h-full flex-1">
          <div class="border-[#60758a] bg-[#f0f2f5] border-r-2 h-full" style="width: 20%;"></div>
        </div>
      </div>
    </div>
  </div>
  <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-5">Uso de la app</h2>
  <div class="flex flex-wrap gap-4 py-6">
    <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-lg border border-[#dbe0e6] p-6">
      <p class="text-[#111418] text-base font-medium leading-normal">Actividad a lo largo del tiempo</p>
      <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
        <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
          <path
            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
            fill="url(#paint0_linear_1131_5935)"></path>
          <path
            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
            stroke="#60758a"
            stroke-width="3"
            stroke-linecap="round"></path>
          <defs>
            <linearGradient id="paint0_linear_1131_5935" x1="236" y1="1" x2="236" y2="149" gradientUnits="userSpaceOnUse">
              <stop stop-color="#f0f2f5"></stop>
              <stop offset="1" stop-color="#f0f2f5" stop-opacity="0"></stop>
            </linearGradient>
          </defs>
        </svg>
        <div class="flex justify-around">
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Jan</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Feb</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Mar</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Apr</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">May</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Jun</p>
          <p class="text-[#60758a] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection