<?php

namespace App\Http\Livewire\CooUser;

use App\Models\CooUser;
use Livewire\Component;

class Show extends Component
{
    public CooUser $us;
    public function render()
    {
        return view('livewire.coo-user.show');
    }
}
