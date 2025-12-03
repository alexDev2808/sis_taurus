<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;

class SliderComponent extends Component
{
    public $delay = 60000; // 60 segundos por defecto

    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.slider-component', compact('uploads'));
    }
}
