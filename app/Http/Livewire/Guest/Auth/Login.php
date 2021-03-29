<?php

namespace App\Http\Livewire\Guest\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {
    
    public $email = '';
    public $password = '';

    public function render() {
        return view('livewire.guest.auth.login');
    }

    public function authenticate() {

        $messages = array(
            'email.required' => 'O campo credencial é obrigatório.',
            'password.required' => 'O campo senha é obrigatório.',
        );
        
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], $messages);

        //if (!Auth::attempt($credentials, $this->remember)) {
                                        // True for remember me
        if (!Auth::attempt($credentials, true)) {
            $this->addError('email', trans('auth.failed'));
    
            return;
            
        }
        return redirect()->intended('dashboard');
    

    }

}
