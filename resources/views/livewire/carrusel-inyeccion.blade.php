
<div>

    <div class="w-8 h-8 absolute top-0 left-0 z-40 flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
        </svg>         
    </div>

    <div class="swiper mySwiper w-full h-screen">
        <div class="swiper-wrapper">
            @foreach ($items as $item)
                <div class="swiper-slide">
                    <iframe 
                        class="w-full h-full" 
                        src="{{ $item->url }}" 
                        frameborder="0" 
                        style="border:0" 
                        allowfullscreen 
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                    </iframe>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next text-zinc-100"></div>
        <div class="swiper-button-prev text-zinc-100"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

@push('scripts')

<script>
    document.addEventListener('livewire:initialized', () => {
        const paused = "yes";
        const swiper = new Swiper(".mySwiper", {
            grabCursor: true,
            effect: 'fade',
            keyboard: {
                enabled: true
            },
            autoplay: {
                delay: {{ $delay }},
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
                clickable: true
            },
        });
    });
</script>

@endpush