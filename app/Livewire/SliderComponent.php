<?php

namespace App\Livewire;

use App\Models\SliderSetting;
use App\Models\Upload;
use Livewire\Component;

class SliderComponent extends Component
{
    public $delay;

    public function mount()
    {
        $config = SliderSetting::getConfig();
        $this->delay = $config->delay; // Convierte segundos a milisegundos automáticamente
    }

    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.slider-component', compact('uploads'));
    }
}
