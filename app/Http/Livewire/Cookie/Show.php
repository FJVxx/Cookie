<?php

namespace App\Http\Livewire\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class Show extends Component
{
    public Cookie $co; 
    public function render()
    {
        return view('livewire.cookie.show');
    }
}
