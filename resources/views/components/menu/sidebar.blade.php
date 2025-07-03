<div class="fixed top-0 left-0 z-50 h-screen w-[240px] border-r border-r-gray-400">
    <div class="flex flex-col">
        <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#111418] text-base font-medium leading-normal">Notificaciones App</h1>
                <div class="flex flex-col gap-2">
                    {{-- Panel --}}
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2">
                        <x-icons.house />
                        <p class="text-[#111418] text-sm font-medium leading-normal">Panel</p>
                    </a>
                </div>
                <div class="flex flex-col gap-2">
                    {{-- Usuario --}}
                    <a href="{{ route('guests.index') }}" class="flex items-center gap-3 px-3 py-2">
                        <x-icons.people />
                        <p class="text-[#111418] text-sm font-medium leading-normal">Usuarios</p>
                    </a>
                </div>
                <div class="flex flex-col gap-2">
                    {{-- Plantillas --}}
                    <a href="{{ route('templates.index') }}" class="flex items-center gap-3 px-3 py-2">
                        <x-icons.paper />
                        <p class="text-[#111418] text-sm font-medium leading-normal">Plantillas</p>
                    </a>
                </div>
                <div class="flex flex-col gap-2">
                    {{-- Notificaciones --}}
                    <a href="{{ route('notifications.index') }}" class="flex items-center gap-3 px-3 py-2">
                        <x-icons.notification />
                        <p class="text-[#111418] text-sm font-medium leading-normal">Notificaciones</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>