
<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($uploads as $upload)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="" class="text-xl font-bold">
                        {{ $upload->titulo }}
                    </a>
                    <p class="text-sm text-gray-500">Ultima actualización: {{ $upload->updated_at->format('d/m/Y') }}</p>
                </div>
    
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a 
                        href="{{ route('uploads.edit', $upload->id ) }}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Editar
                    </a>
                    <a 
                        href="#"
                        class="bg-red-700 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Eliminar
                    </a>
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
