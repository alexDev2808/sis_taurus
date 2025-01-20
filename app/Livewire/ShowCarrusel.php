<?php

namespace App\Livewire;

use App\Models\Carrusel;
use App\Models\Upload;
use Livewire\Component;

class ShowCarrusel extends Component
{
    public $isPaused = false;
    public $delay;

    protected $listeners = [];

    public function toogleBtn() {
        $this->isPaused = !$this->isPaused;
    }

    public function mount(Carrusel $carrusel) {
        $this->delay = $carrusel->tiempo * 60000;
    }
    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.show-carrusel', compact('uploads'));
    }
}
