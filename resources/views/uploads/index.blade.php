@section('titulo_pagina')
    Listado
@endsection
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Imágenes Comunicados') }}
                </h2>

                <div class="flex gap-1">
                    <a href="{{ route('uploads.settings') }}" class="p-3 rounded-lg bg-gray-100 text-gray-600 text-sm font-bold hover:bg-gray-200 hover:text-gray-700 transition-colors">Configuración</a>
                    <a href="{{ route('uploads.create') }}" class="p-3 rounded-lg bg-gray-100 text-gray-600 text-sm font-bold flex items-center hover:bg-gray-200 hover:text-gray-700 transition-colors">
                        {{ __('Agregar imágen') }}
                    </a>
                    <a href="{{ route('uploads.show') }}" class="p-3 bg-blue-900 rounded-lg text-white text-sm font-bold flex items-center hover:bg-blue-950 transition-colors">
                        {{ __('Ver carrusel') }}
                    </a>
                </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
                <div class="border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                    {{ session('mensaje') }}
                </div>
            @endif

            <livewire:mostrar-uploads />
            
        </div>
    </div>
</x-app-layout>
