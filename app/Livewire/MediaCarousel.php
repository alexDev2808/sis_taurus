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
            ['type' => 'video', 'src' => '/storage/videos/v_mpeg.webm'],
            ['type' => 'video', 'src' => '/storage/videos/video4.webm'],
            ['type' => 'image', 'src' => '/storage/images/decalogo.jpg'],
        ];
    }

    public function render()
    {
        return view('livewire.media-carousel');
    }
}