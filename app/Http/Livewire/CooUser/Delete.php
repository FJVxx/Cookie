<?php

namespace App\Http\Livewire\CooUser;

use App\Models\CooUser;
use Livewire\Component;

class Delete extends Component
{
    public CooUser $us;  
    public function render()
    {

        return view('livewire.coo-user.delete');
    }
    public function delete(){

        $this->us->delete();
        return redirect(route('coo-user.view'));
    }
}
