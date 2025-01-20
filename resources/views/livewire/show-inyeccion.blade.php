

<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($items as $item)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="{{ route('carrusel.show', $item->id ) }}" class="text-xl font-bold">
                        {{ $item->nombre }}
                    </a>
                    <p class="text-sm text-gray-500">{{ $item->desc }}</p>
                    <p class="text-sm text-gray-500">Ultima actualización: {{ $item->updated_at->format('d/m/Y') }}</p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a 
                        href="{{ route('carrusel.edit', $item->id ) }}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Editar
                    </a>
                    <button
                        wire:click="$dispatch('eliminar', {{ $item->id }})"
                        class="bg-red-700 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Eliminar
                    </button>
                </div>
            </div> 
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay elementos</p>
        @endforelse
    </div>
    

    
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:initialized', function () {

            @this.on('eliminar', itemId => {
                Swal.fire({
                    title: "¿Eliminar elemento?",
                    text: "Esta acción es irreversible!",
                    icon: "danger",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Cancelar",
                    confirmButtonText: "Si, eliminar!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Eliminar upload
                        @this.call('eliminarCarrusel', itemId)
                        Swal.fire({
                            title: "Eliminado!",
                            text: "El elemento ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
        })
    </script>

@endpush