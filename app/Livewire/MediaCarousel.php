<?php

namespace App\Livewire;

use Livewire\Component;

class MediaCarousel extends Component
{
    public $media = [];

    public function mount()
    {
        $this->media = [
            ['type' => 'video', 'src' => '/storage/videos/video3.webm'],
            ['type' => 'video', 'src' => '/storage/videos/video1.webm'],
            ['type' => 'video', 'src' => '/storage/videos/video4.webm'],
        ];
    }

    public function render()
    {
        return view('livewire.media-carousel');
    }
}