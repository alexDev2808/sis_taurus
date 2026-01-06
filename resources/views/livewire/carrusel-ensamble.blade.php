
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
                            <img class="object-contain w-48" src="{{ asset('images/QR.png') }}" />
                        </div>

                        <div>
                            @livewire('reloj-component')
                        </div>
                    </div>

                </div>

                <div class="w-3/4 h-screen flex justify-end overflow-hidden">
                    <iframe
                        width="900" 
                        height="650" 
                        src="https://lookerstudio.google.com/embed/reporting/e687bb67-03ce-4d1b-b100-585d7d7e8c7e/page/yM8RE" 
                        frameborder="0" 
                        style="border:0" 
                        allowfullscreen 
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                    </iframe>
                </div>

            
            </div>
            

</div>
