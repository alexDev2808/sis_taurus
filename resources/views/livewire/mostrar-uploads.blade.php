
<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($uploads as $upload)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="{{ route('uploads.edit', $upload->id ) }}" class="text-xl font-bold">
                        {{ $upload->titulo }}
                    </a>
                    <p class="text-sm text-gray-500">Ultima actualización: {{ $upload->updated_at->format('d/m/Y') }}</p>
                </div>

                <div class="w-60 border-4 border-gray-700 rounded-lg p-2 mx-auto mt-2 md:mt-0">
                    <button wire:click="$dispatch('mostrarImg', {{ $upload }})">
                        <img src="{{ asset('storage/uploads/' . $upload->imagen ) }}" alt="{{ 'Archivo: ' . $upload->titulo }}">
                    </button>
                </div>
    
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a 
                        href="{{ route('uploads.edit', $upload->id ) }}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Editar
                    </a>
                    <button
                        wire:click="$dispatch('eliminar', {{ $upload->id }})"
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
    
    
    <div class="mt-10">
        {{ $uploads->links() }}
    </div>
    
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:initialized', function () {
            const path = `{{ asset('storage/uploads') }}`

            @this.on('eliminar', uploadId => {
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
                        @this.call('eliminarUpload', uploadId)
                        Swal.fire({
                            title: "Eliminado!",
                            text: "El archivo ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });

            @this.on('mostrarImg', ( upload ) => {
                Swal.fire({
                    title: upload.titulo,
                    width: 780,
                    height: 480,
                    imageUrl: `${path}/${upload.imagen}`,
                    imageWidth: 780,
                    imageHeight: 480
                });
            });
        })
    </script>

@endpush