<?php

namespace App\Http\Livewire\CooUser;

use Illuminate\Support\Facades\Storage;
use App\Models\CooUser;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = CooUser::all();
        return view('livewire.coo-user.index', compact('user'));
    }
}
