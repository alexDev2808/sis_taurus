<?php

namespace App\Livewire;

use Livewire\Component;

class MediaCarousel extends Component
{
    public $media = [];
    public $current = 0;

    public function mount()
    {
        $this->media = [
            ['type' => 'video', 'src' => '/storage/videos/video1.mp4'],
            ['type' => 'video', 'src' => '/storage/videos/video2.mp4'],
        ];
    }

    public function next()
    {
        $this->current = ($this->current + 1) % count($this->media);
    }

    public function render()
    {
        return view('livewire.media-carousel');
    }
}