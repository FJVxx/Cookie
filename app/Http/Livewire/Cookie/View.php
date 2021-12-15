<?php

namespace App\Http\Livewire\Cookie;

use App\Models\Cookie;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination; 
    protected $paginationTheme = 'bootstrap';
    public $search; 
    public $load = false; 
    public function render()
    {
        $cookie = ($this->load == true ) ? Cookie::join(
            'coo_users','cookies.id_user','=','coo_users.id')
        ->select(
            'cookies.*',
            'coo_users.username as autor_recipe')
        ->where('cookie_name','LIKE','%'. $this->search . '%')
        ->where('ingredients','LIKE','%'. $this->search . '%')    
        ->paginate(5) : [];
        return view('livewire.cookie.view', compact('cookie'));
    }

    public function load(){
        $this->load = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}
