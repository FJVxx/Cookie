<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }

    public function login(){
        $this->validate();
        if(Auth::attempt(['email'=> $this->email, 'password'=> $this->password])){
            return redirect(route('coo-user.index'));
        }else{
            $this->emit('alert','Verify email and password' );
        }
    }

    public function rules(){
        return [
            'email'=>'required|email',
            'password'=>'min:5|string|required'
        ];
    }
}
