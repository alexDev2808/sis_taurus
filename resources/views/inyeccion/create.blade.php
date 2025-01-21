@section('titulo_pagina')
    Agregar
@endsection
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-start mt-6 ms-6">
                    <a 
                        href="{{ route('inyeccion.index' ) }}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-center text-xs font-bold"
                        >
                        Regresar
                    </a>
                </div>
                <div class="p-6 text-gray-900">

                    <h1 class="text-2xl font-bold text-center mb-1">Crear elemento</h1>

                    <div class="md:flex md:justify-center p-5">

                        <livewire:create-inyeccion />

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
