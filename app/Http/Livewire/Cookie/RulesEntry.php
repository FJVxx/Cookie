<?php

namespace App\Http\Livewire\Cookie;

class RulesEntry{

    public static function rule($id = null){


        return
        [
            'co.cookie_name' => 'required|string',
            'co.description' => 'required|string',
            'co.ingredients' => 'required|string',
            'photo' => 'nullable|image',

        ];
    }
}