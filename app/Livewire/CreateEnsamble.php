<?php

namespace App\Livewire;

use App\Models\Ensamble;
use Livewire\Component;

class CreateEnsamble extends Component
{
    public $nombre;
    public $desc;
    public $url;
    
    protected $rules = [
        'nombre' => 'required|string',
        'desc'=> 'required|string',
        'url'=> 'required|string',
    ];

    public function crear() {
        $datos = $this->validate();

        Ensamble::create([
            'nombre'=> $datos['nombre'],
            'desc'=> $datos['desc'],
            'url'=> $datos['url'],
        ]);

        session()->flash('mensaje','Se creo correctamente!');

        return redirect()->route('ensamble.index');
    }
    public function render()
    {
        return view('livewire.create-ensamble');
    }
}
