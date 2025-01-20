<?php

namespace App\Livewire;

use App\Models\Carrusel;
use Livewire\Component;

class EditarCarrusel extends Component
{
    public $carrusel_id;
    public $nombre;
    public $desc;
    public $tiempo;

    protected $rules = [
        'nombre' => 'required|string',
        'desc' => 'required|string',
        'tiempo' => 'required|integer'
    ];

    public function mount(Carrusel $carrusel) {
        $this->carrusel_id = $carrusel->id;
        $this->nombre = $carrusel->nombre;
        $this->desc = $carrusel->desc;
        $this->tiempo = $carrusel->tiempo;
    }

    public function editarCarrusel() {
        $datos = $this->validate();

        // Encontrar el carrusel a editar
        $carrusel = Carrusel::find( $this->carrusel_id );

        // Asignar los valores
        $carrusel->nombre = $datos['nombre'];
        $carrusel->desc = $datos['desc'];
        $carrusel->tiempo = $datos['tiempo'];

        // Guardar cambios
        $carrusel->save();

        // Redireccionar
        session()->flash('mensaje', 'El elemento se actualizó correctamente');

        return redirect()->route('carrusel.index');

    }

    public function render()
    {
        return view('livewire.editar-carrusel');
    }
}
