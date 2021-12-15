<?php

namespace App\Http\Livewire\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class Delete extends Component
{
    public Cookie $co; 
    public function render()
    {
        return view('livewire.cookie.delete');
    }
    public function delete(){

        $this->co->delete();
        return redirect(route('cookie.view'));
    }
}
