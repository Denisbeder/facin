<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class CreateComponent extends Component
{
    public $deactivated;

    public $name;

    public $email;

    public $password;

    public $passwordConfirmation;

    protected $rules = [
        'name' => ['required', 'min:3', 'string'],
        'email' => ['required', 'email', 'string'],
        'password' => ['required', 'min:6', 'same:passwordConfirmation', 'string'],
        'passwordConfirmation' => ['required', 'min:6', 'same:password', 'string']
    ];

    public function save(): RedirectResponse
    {
        $this->validate();

        $user = User::updateOrCreate([
            'email' => $this->email,
        ], [
            'deactivated' => $this->deactivated,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->dispatchBrowserEvent('notify', ['content' => 'Registro foi salvo', 'type' => 'success']);

        return redirect()->route('user.edit', [$user]);
    }

    public function render(): View
    {
        return view('livewire.user.create-component');
    }
}
