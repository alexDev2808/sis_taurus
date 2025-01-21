<?php

namespace App\Livewire;

use App\Models\Inyeccion;
use Livewire\Component;

class CreateInyeccion extends Component
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

        Inyeccion::create([
            'nombre'=> $datos['nombre'],
            'desc'=> $datos['desc'],
            'url'=> $datos['url'],
        ]);

        session()->flash('mensaje','Se creo correctamente!');

        return redirect()->route('inyeccion.index');
    }
    public function render()
    {
        return view('livewire.create-inyeccion');
    }
}
