<?php

namespace App\Http\Livewire\Guest\Auth;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:2|max:255',
        'email' => 'required|min:10|max:255',
        'password' => 'required|min:8|max:255',
    ];


    public function render()
    {
        return view('livewire.guest.auth.register');
    }


    public function create() {
        //dd($this->name, $this->email, $this->password);
        $this->validate();
        $user = ModelsUser::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        
        // Event when user has created
        $this->dispatchBrowserEvent('user-registered', ['user' => $user]);
        // Refresh datatables when user has created 
        $this->emit('refreshLivewireDatatable');
    }

}
