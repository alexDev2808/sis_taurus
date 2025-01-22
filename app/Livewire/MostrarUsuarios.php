<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class MostrarUsuarios extends Component
{
    protected $listeners = ['eliminarItem'];
    public function eliminarItem(User $user) {
        $user->delete();
    }
    public function render()
    {
        $items = User::all();
        return view('livewire.mostrar-usuarios', compact('items'));
    }
}
