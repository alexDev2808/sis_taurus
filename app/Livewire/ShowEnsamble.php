<?php

namespace App\Livewire;

use App\Models\Ensamble;
use Livewire\Component;

class ShowEnsamble extends Component
{
    protected $listeners = ['eliminarItem'];
    public function eliminarItem(Ensamble $ensamble) {
        $ensamble->delete();
    }
    public function render()
    {
        $items = Ensamble::all();
        return view('livewire.show-ensamble', compact('items'));
    }
}
