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

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <ol>
                        <li>Slider Comunicados</li>
                        <li>Slider Inyección</li>
                        <li>Slider Ensamble</li>
                    </ol>
                </div>

        </div>
    </div>
</x-app-layout>
