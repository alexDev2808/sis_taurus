
<div class="w-full min-h-screen" style="background-color: #{{ $color_fondo }};">
    <div class="w-full h-full flex text-white text-3xl font-bold">
        
            <div class="w-full h-screen flex px-5 pe-0">

                <div class="w-1/4 h-screen flex flex-col justify-between">

                    <div class="flex justify-between items-center h-14 pt-2 ps-2">
                        <img class="object-contain w-32" src="{{ asset('images/Taurus_slogan.png') }}"/>
                        <h4 class="font-bold text-xl">Ensamble</h4>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <div class="py-5">
                            <img class="object-contain w-10 place-self-center" src="{{ asset('images/Info.png') }}"/>
                            <div class="leading-none mt-2 mb-4 relative h-12">
                                <p class="font-normal text-[34px] tracking-[-0.06em]">Información</p>
                                <p class="tracking-wider text-[40px] font-extrabold absolute top-5">general</p>
                            </div>
                            <img class="object-contain w-38" src="{{ asset('images/QR.png') }}" />
                        </div>

                        <div>
                            @livewire('reloj-component')
                        </div>
                    </div>

                </div>


                <div class="w-3/4 h-screen flex justify-end overflow-hidden" id="iframe-container">
                    <iframe
                        id="dashboard-iframe"
                        src="https://lookerstudio.google.com/embed/reporting/e687bb67-03ce-4d1b-b100-585d7d7e8c7e/page/yM8RE"
                        frameborder="0"
                        style="border:0"
                        allowfullscreen
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                    </iframe>
                </div>

            
            </div>


</div>

<script>
    (function() {
        function updateIframeSize() {
            const iframe = document.getElementById('dashboard-iframe');
            if (iframe) {
                const width = window.innerWidth * 0.75;
                const height = window.innerHeight;

                iframe.width = width;
                iframe.height = height;

                // También actualizar Livewire
                if (window.Livewire) {
                    Livewire.find('{{ $_instance->getId() }}').set('screenWidth', window.innerWidth);
                    Livewire.find('{{ $_instance->getId() }}').set('screenHeight', window.innerHeight);
                }
            }
        }

        // Ejecutar cuando cargue
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', updateIframeSize);
        } else {
            updateIframeSize();
        }

        // Ejecutar cuando redimensione
        window.addEventListener('resize', updateIframeSize);
    })();
</script>
