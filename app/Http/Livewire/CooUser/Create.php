<?php

namespace App\Http\Livewire\CooUser;


use App\Models\CooUser;
use App\Http\Livewire\CooUser\Validation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public CooUser $us;
    public $photo; 
    public $password;
    public $confirm; 

    public function mount(){ 
        $this->us = new CooUser();
    }

    public function render()
    {
        return view('livewire.coo-user.create');

    }
    public function create()
    {
        $this->validate();
        $this->us->password = Hash::make($this->password);

        if( $this->photo){
            $this->us->photo = Storage::disk('public')->put('images/users', $this->photo);
        }
        $this->us->save();
        return redirect(route('coo-user.index'));

    }

    protected function rules(){
        return Validation::valid();
    }
}
