<div x-data="{
    time: '',
    date: '',
    updateTime() {
        const now = new Date();
        this.time = now.toLocaleTimeString('es-MX', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        });
        this.date = now.toLocaleDateString('es-MX', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }
}"
x-init="updateTime(); setInterval(() => updateTime(), 1000)">
    <div class="text-white">
        <p class="text-6xl font-bold" x-text="time"></p>
        <p class="text-base font-normal capitalize" x-text="date"></p>
    </div>
</div>
