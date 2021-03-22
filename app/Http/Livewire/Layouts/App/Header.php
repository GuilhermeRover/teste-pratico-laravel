<?php

namespace App\Http\Livewire\Layouts\App;

use App\Models\User as Users;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $users = Users::get();
        return view('livewire.layouts.app.header', [
            'users' => $users,
        ]);
    }
}
