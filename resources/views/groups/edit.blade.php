@extends('layouts.app')
@section('content')
<form action="{{ route('groups.update', $group->group_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="flex flex-col max-w-[960px]">
        <div class="flex flex-wrap gap-2 p-4">
            <a class="text-[#60768a] text-base font-medium leading-normal" href="{{ route('groups.index') }}">Grupos</a>
            <span class="text-[#60768a] text-base font-medium leading-normal">/</span>
            <span class="text-[#111518] text-base font-medium leading-normal">Editar grupo</span>
        </div>

        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#111518] text-[32px] font-bold">Editar grupo</p>
                <p class="text-[#60768a] text-sm">Modifica la información del grupo o añade/elimina usuarios.</p>
            </div>
        </div>
        @if ($errors->has('general'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 mx-4 max-w-[480px]">
            <strong>Error:</strong> {{ $errors->first('general') }}
        </div>
        @endif

        <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
            <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111518] text-base font-medium pb-2">Nombre del grupo</p>
                <input name="name"
                    class="form-input w-full rounded-xl border border-[#dbe1e6] bg-white h-14 p-[15px] text-base text-[#111518]"
                    value="{{ old('name', $group->name) }}" />
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </label>
        </div>

        {{-- Lista de invitados --}}
        <div id="guestList">
            @forelse ($guests as $guest)
            <div class="guest-item flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between border-b border-[#f0f2f5]"
                data-name="{{ strtolower($guest->name) }}"
                data-phone="{{ $guest->phone_number }}">
                <div class="flex items-center gap-4">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-14"
                        style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode($guest->name) }}&background=random");'></div>
                    <div class="flex flex-col justify-center">
                        <p class="text-[#111518] text-base font-medium leading-normal">{{ $guest->name }}</p>
                        <p class="text-[#60768a] text-sm font-normal leading-normal">{{ $guest->phone_number }}</p>
                    </div>
                </div>
                <div class="shrink-0">
                    <input
                        type="checkbox"
                        name="guest_ids[]"
                        value="{{ $guest->guest_id }}"
                        class="h-5 w-5 rounded border-[#dbe1e6] border-2 bg-transparent text-[#0b80ee] checked:bg-[#0b80ee] checked:border-[#0b80ee] focus:ring-0"
                        {{ in_array($guest->guest_id, $selectedGuestIds ?? []) ? 'checked' : '' }}>
                </div>
            </div>
            @empty
            <p class="px-4 py-4 text-[#60768a] text-sm">No hay invitados disponibles.</p>
            @endforelse
        </div>

        <div class="flex justify-stretch">
            <div class="flex flex-1 gap-3 flex-wrap px-4 py-5 justify-end">
                <a href="{{ route('groups.show', $group->group_id) }}"
                    class="flex items-center justify-center rounded-full h-10 px-4 bg-[#f0f2f5] text-[#111518] text-sm font-bold">
                    Cancelar
                </a>
                <button type="submit"
                    class="flex items-center justify-center rounded-full h-10 px-4 bg-[#0b80ee] text-white text-sm font-bold">
                    Guardar cambios
                </button>
            </div>
        </div>
    </div>
</form>
@endsection