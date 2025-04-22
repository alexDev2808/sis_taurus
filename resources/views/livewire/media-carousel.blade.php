@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

<div
    class="w-screen h-screen overflow-hidden"
    x-data="mediaCarousel"
    x-init="init()"
    @keydown.window="handleKey($event)"
    tabindex="0"
>
    <div class="swiper mySwiper w-full h-full">
        <div class="swiper-wrapper">
            @foreach ($media as $item)
                <div class="swiper-slide w-full h-full bg-black flex items-center justify-center">
                    @if ($item['type'] === 'video')
                        <video
                            class="w-full h-full object-cover"
                            src="{{ $item['src'] }}"
                            autoplay
                            controls
                            @ended="nextSlide"
                            x-ref="video"
                        ></video>
                    @else
                        <img
                            class="w-full h-full object-cover"
                            src="{{ $item['src'] }}"
                            alt="Imagen"
                            x-ref="image"
                        />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('alpine:init', () => {
  Alpine.data('mediaCarousel', () => ({
    swiper: null,
    timer: null,

    init() {
      this.swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        allowTouchMove: false,
      });

      this.handleSlide();

      this.swiper.on('slideChangeTransitionEnd', () => {
        this.handleSlide();
      });
    },

    handleSlide() {
      clearTimeout(this.timer);
      const currentSlide = this.swiper.slides[this.swiper.activeIndex];
      const video = currentSlide.querySelector('video');
      const image = currentSlide.querySelector('img');

      if (video) {
        video.currentTime = 0;
        video.play();
      }

      if (image) {
        this.timer = setTimeout(() => {
          this.swiper.slideNext();
        }, 50000); // 60 segundos
      }
    },

    nextSlide() {
      this.swiper.slideNext();
    },

    prevSlide() {
      this.swiper.slidePrev();
    },

    toggleVideoPlay() {
      const currentSlide = this.swiper.slides[this.swiper.activeIndex];
      const video = currentSlide.querySelector('video');
      if (video) {
        video.paused ? video.play() : video.pause();
      }
    },

    handleKey(e) {
      switch (e.key) {
        case 'ArrowRight':
          this.nextSlide();
          break;
        case 'ArrowLeft':
          this.prevSlide();
          break;
        case ' ':
          e.preventDefault();
          this.toggleVideoPlay();
          break;
      }
    }
  }));
});
</script>
@endpush
