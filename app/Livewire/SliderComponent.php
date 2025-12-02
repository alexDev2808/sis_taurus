<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class SliderComponent extends Component
{
    public $delay = 6000; // 5 segundos por defecto

    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.slider-component', compact('uploads'));
    }
}
