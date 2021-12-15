<?php

namespace App\Http\Livewire\CooUser;

use App\Models\CooUser;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search; 
    public $charge = false;

    public function render()
    {

        $user = ($this->charge == true) ? CooUser::where('username','LIKE','%'. $this->search . '%')
        ->orwhere('email','LIKE','%'. $this->search . '%')
        ->paginate(4) : [];
        return view('livewire.coo-user.view',compact('user'));
    }

    public function charge(){
        $this->charge = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
