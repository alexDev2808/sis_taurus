<div class="w-full h-full">
    <div class="swiper mySwiper w-full h-full">
        <div class="swiper-wrapper">
            @forelse ($uploads as $upload)
                <div class="swiper-slide">
                    @if(pathinfo($upload->imagen, PATHINFO_EXTENSION) === 'mp4' || pathinfo($upload->imagen, PATHINFO_EXTENSION) === 'webm')
                        <video class="object-contain w-full h-full" autoplay muted loop>
                            <source src="{{ asset('storage/uploads/' . $upload->imagen) }}" type="video/{{ pathinfo($upload->imagen, PATHINFO_EXTENSION) }}">
                        </video>
                    @else
                        <img class="object-contain w-full h-full" src="{{ asset('storage/uploads/' . $upload->imagen) }}" alt="slide" />
                    @endif
                </div>
            @empty
                <div class="swiper-slide flex items-center justify-center bg-gray-200">
                    <p class="text-gray-500 text-xl">No hay contenido para mostrar</p>
                </div>
            @endforelse
        </div>
        {{-- Botones --}}
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        <div class="swiper-pagination"></div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:initialized', () => {
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            grabCursor: true,
            effect: 'creative',
            creativeEffect: {
                prev: {
                    shadow: true,
                    origin: "left center",
                    translate: ["-5%", 0, -200],
                    rotate: [0, 100, 0],
                },
                next: {
                    origin: "right center",
                    translate: ["5%", 0, -200],
                    rotate: [0, -100, 0],
                },
            },
            keyboard: {
                enabled: true
            },
            autoplay: {
                delay: {{ $delay }},
                disableOnInteraction: false,
                pauseOnMouseEnter: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                type: "bullets",
                clickable: true
            },
        });
    });
</script>
@endpush
