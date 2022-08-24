<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormComponent extends Component
{
    public $deactivated;

    public $name;

    public $email;

    public $password;

    public $passwordConfirmation;

    protected $rules = [
        'name' => 'required|min:3|string',
        'email' => 'required|email|string',
        'password' => 'required|min:6|same:passwordConfirmation|string',
        'passwordConfirmation' => 'required|min:6|same:password|string'
    ];

    public function save()
    {
        $this->validate();

        User::updateOrCreate([
            'email' => $this->email,
        ],[
            'deactivated' => $this->deactivated,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public function render(): View
    {
        return view('livewire.user.form-component');
    }
}
