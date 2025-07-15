@props(['action', 'method' => 'POST', 'returnUrl' => ''])

<form x-data="formLoader()"
    x-on:submit.prevent="submitForm" method="{{ $method }}" action="{{ $action }}">
    <!-- Modal loader -->
    <div x-show="loading" x-transition class="fixed inset-0 z-[300] flex items-center justify-center bg-black/50">
        <div class="bg-white p-6 rounded-lg flex flex-col items-center gap-4 shadow-xl">
            <svg class="animate-spin h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8h4z"></path>
            </svg>
            <p class="text-gray-800 text-lg font-semibold">Guardando...</p>
        </div>
    </div>
    @csrf
    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    <!-- Slot con los campos del formulario -->
    {{ $slot }}

    {{-- Botones --}}
    <div class="flex gap-4 mt-8">
        <x-controls.button type="submit" x-bind:disabled="loading">Guardar</x-controls.button>
        <x-controls.button href="{{ $returnUrl }}" variant="secondary">
            Cancelar
        </x-controls.button>
    </div>
</form>

<script>
    function formLoader() {
        return {
            loading: false,
            submitForm(event) {
                this.loading = true;
                setTimeout(() => {
                    event.target.submit();
                }, 1000);
            }
        }
    }
</script>