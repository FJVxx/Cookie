<?php

namespace App\Http\Livewire\CooUser;

class Validation{

    public static function valid($id = null){


        $validatepassword = ($id) ? 'nullable|min:5' : "required|min:5";
        return
        [
            'us.username' => 'required|string',
            'us.email' => 'required|email|unique:coo_users,email,'. $id, 
            'photo' => 'nullable|image',
            'password' => $validatepassword,
            'confirm' => 'same:password'
            
        ];
    }
}