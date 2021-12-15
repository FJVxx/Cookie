<?php

namespace App\Http\Livewire\CooUser;

use App\Models\CooUser;
use App\Http\Livewire\CooUser\Validation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public CooUser $us;
    public $photo; 
    public $confirm; 
    public $password;
    public function render()
    {
        return view('livewire.coo-user.update');
    }
    public function update(){

        $this->validate();
        if($this->photo){
            if($this->us->photo){
                Storage::disk('public')->delete($this->us->photo);
            }
            $this->us->photo = Storage::disk('public')->put('images/user', $this->photo);
        }
        if($this->password){
            $this->user->password = Hash::make($this->password);
        }

        $this->us->save();
        return redirect(route('coo-user.view'));
 
    }
    protected function rules(){
        return Validation::valid($this->us->id);
    }
}
