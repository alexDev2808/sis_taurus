<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class ShowCarrusel extends Component
{
    public $isPaused = false;
    public $delay = 3000;

    protected $listeners = [];

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }
    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.show-carrusel', compact('uploads'));
    }
}
