@section('titulo_pagina')
    Configurar slider
@endsection
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Configuración de Slider') }}
                </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-start mt-6 ms-6">
                    <a 
                        href="{{ route('uploads.index' ) }}"
                        class="bg-gray-100 py-2 px-4 rounded-lg text-gray-700 text-center text-xs font-bold hover:bg-gray-200 transition-colors"
                        >
                        Regresar
                    </a>
                </div>
                <div class="p-6 text-gray-900">

                    <h1 class="text-2xl font-bold text-center mb-1">Ajustes</h1>

                    <div class="md:flex md:justify-center p-5">

                        <livewire:configuracion-slider />

                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>