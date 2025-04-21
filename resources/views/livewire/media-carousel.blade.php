<div
    x-data="carousel({{ json_encode($media) }})"
    x-init="init()"
    class="relative w-full max-w-2xl mx-auto"
>
    <template x-if="media.length > 0">
        <div class="w-full h-64 flex items-center justify-center bg-gray-100 rounded shadow overflow-hidden">
            <template x-if="media[current].type === 'video'">
                <video
                    x-ref="video"
                    :src="media[current].src"
                    autoplay
                    muted
                    controls
                    @ended="nextVideo"
                    class="w-full h-full object-contain rounded"
                ></video>
            </template>

            <template x-if="media[current].type === 'image'">
                <img
                    :src="media[current].src"
                    alt="imagen"
                    class="w-full h-full object-cover rounded"
                />
            </template>
        </div>
    </template>

    <div class="flex justify-between mt-4">
        <button
            @click="prev"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-800"
        >
            ← Anterior
        </button>

        <button
            @click="next"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-800"
        >
            Siguiente →
        </button>
    </div>
</div>

<script>
function carousel(mediaItems) {
    return {
        media: mediaItems,
        current: 0,

        init() {
            this.playVideoIfNeeded()
        },

        next() {
            this.current = (this.current + 1) % this.media.length
            this.playVideoIfNeeded()
        },

        prev() {
            this.current = (this.current - 1 + this.media.length) % this.media.length
            this.playVideoIfNeeded()
        },

        nextVideo() {
            this.next()
        },

        playVideoIfNeeded() {
            this.$nextTick(() => {
                const el = this.$refs.video
                if (el && el.tagName === 'VIDEO') el.play()
            })
        }
    }
}
</script>
