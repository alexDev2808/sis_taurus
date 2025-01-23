<?php

namespace App\Livewire;

use App\Models\User;
use Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class CrearUsuario extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $rol;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed'],
        'rol' => ['required','numeric','between:1,4'],
    ];

    public function crearUsuario() {
        $data = $this->validate();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol']
        ]);

        session()->flash('mensaje','Se creo el usuario correctamente!');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.crear-usuario');
    }
}
