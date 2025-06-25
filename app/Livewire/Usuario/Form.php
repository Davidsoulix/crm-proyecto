<?php

namespace App\Livewire\Usuario;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Form extends Component
{
    public $name, $email, $password, $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];

    public function guardar()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Usuario creado correctamente.');
        return redirect()->route('usuario.index');
    }

    public function render()
    {
        return view('livewire.usuario.form');
    }
}
