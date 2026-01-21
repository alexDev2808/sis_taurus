<style>
    @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .gradient-animation {
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }
</style>

<div class="w-full h-screen" style="background-color: #{{ $color_fondo }};">
    <div class="w-full h-full flex text-white text-3xl font-bold">
        <div class="w-1/3 h-screen flex flex-col">

            <div class="flex justify-between items-center h-10 pt-2 px-2">
                <img class="object-contain w-32" src="{{ asset('images/Taurus_slogan.png') }}"/>
                <h4 class="font-bold text-lg">Comunicados</h4>
            </div>

            <div class="w-full h-1/2 flex justify-center items-center px-5">
                @foreach ($comunicados as $comunicado)
                    <!-- Contenido -->
                    <div class="w-full bg-white h-3/4 rounded-lg shadow-2xl shadow-black p-6">
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-6 bg-gradient-to-br from-blue-500 to-blue-950 rounded-xl flex items-center justify-center shadow-lg shadow-sky-800/50 float-animation">
                                <span class="text-base">✨</span>
                            </div>
                            <h2 class="text-base font-bold bg-gradient-to-r from-blue-600 to-blue-950 bg-clip-text text-transparent">
                                Frase de la semana
                            </h2>
                        </div>

                        <!-- Quote container -->
                        <div class="relative py-1">
                            <!-- Comilla de apertura -->
                            <div class="absolute -top-2 -left-2 text-2xl text-gray-400 font-serif leading-none select-none">"</div>

                            <!-- Texto de la frase -->
                            <p class="text-sm text-gray-700 leading-relaxed mb-3 relative z-10 px-4">
                                Deja ir el ayer. Deja que hoy sea un nuevo comienzo, sé la mejor persona que puedas y llegarás a donde Dios quiere que estés.
                            </p>

                            <!-- Autor -->
                            <p class="text-sm md:text-md text-blue-950 font-semibold text-right italic relative z-10">
                                - Joel Osteen
                            </p>

                            <!-- Comilla de cierre -->
                            <div class="absolute -bottom-8 -right-2 text-2xl text-gray-400 font-serif leading-none select-none">"</div>
                        </div>

                        <!-- Línea decorativa -->
                        <div class="flex justify-center mt-8">
                            <div class="w-16 h-1 bg-gradient-to-r from-blue-500 via-blue-500 to-blue-950 rounded-full gradient-animation"></div>
                        </div>
                    </div>
                @endforeach
                
            </div>

            <div class="w-full mt-auto flex justify-end pb-4">
                <div class="w-1/3 px-2">
                    <img class="object-contain w-10 place-self-center" src="{{ asset('images/Info.png') }}"/>
                    <div class="leading-none mt-2 mb-1 relative h-12">
                        <p class="font-normal text-[28px] tracking-[-0.075em]">Información</p>
                        <p class="tracking-wider text-[32px] font-extrabold absolute top-4">general</p>
                    </div>
                    <img class="object-contain w-full" src="{{ asset('images/QR.png') }}"/>
                </div>

                <div class="w-2/3 place-self-end">
                    @livewire('reloj-component')
                </div>
            </div>

        </div>


        <div class="w-2/3 h-screen">
            @livewire('slider-component')
        </div>
    </div>
</div>