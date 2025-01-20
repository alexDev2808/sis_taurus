<?php

namespace App\Livewire;

use App\Models\Carrusel;
use Livewire\Component;

class CrearCarrusel extends Component
{

    public $nombre;
    public $desc;
    public $tiempo;

    protected $rules = [
        'nombre' => 'required|string',
        'desc'=> 'required|string',
        'tiempo'=> 'required|integer',
    ];

    public function subirConf() {
        // Validar datos
        $datos = $this->validate();

        // Subir datos
        Carrusel::create([
            'nombre'=> $datos['nombre'],
            'desc'=> $datos['desc'],
            'tiempo'=> $datos['tiempo'],
        ]);

        // Crear mensaje
        session()->flash('mensaje','Se subio correctamente');

        // Redireccionar
        return redirect()->route('carrusel.index');
    }
    public function render()
    {
        return view('livewire.crear-carrusel');
    }
}
