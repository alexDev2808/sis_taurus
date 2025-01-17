@section('titulo_pagina')
    Listado Sliders
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Sliders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" flex flex-col gap-4 justify-between">

                    <div class="leading-10 p-6 bg-white border-b border-gray-200 shadow-lg">
                        <a href="{{ route('uploads.show') }}" class="text-xl font-bold">
                            Comunicados
                        </a>
                        <p class="text-sm text-gray-500">Carrusel de imagénes</p>
                    </div>

                    <div class="leading-10 p-6 bg-white border-b border-gray-200 shadow-lg">
                        <a href="{{ route('uploads.index') }}" class="text-xl font-bold">
                            Inyección
                        </a>
                        <p class="text-sm text-gray-500">Gráficas OEE (Looker Studio)</p>
                    </div>

                    <div class="leading-10 p-6 bg-white border-b border-gray-200 shadow-lg">
                        <a href="{{ route('uploads.index') }}" class="text-xl font-bold">
                            Ensamble
                        </a>
                        <p class="text-sm text-gray-500">Gráficas OEE (Looker Studio)</p>
                    </div>

                </div>

        </div>
    </div>
</x-app-layout>
