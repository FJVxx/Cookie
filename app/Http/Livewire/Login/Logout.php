<?php

namespace App\Http\Livewire\Login;

use App\Http\Livewire\CooUser\Index;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.login.logout');
    }
    
    public function logout(){
        Auth::logout();
        return redirect(route('coo-user.index'));
    }
}
