<?php

namespace App\Http\Livewire\Cookie;

use App\Models\Cookie;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public Cookie $co;
    public $photo; 
    public function render(){
        return view('livewire.cookie.update');
    }
    public function updateRecipe()
    {
        $this->validate();
        if($this->photo != null){
            if($this->co->photo != null){
                Storage::disk('public')->delete($this->co->photo);
            }
            $this->co->photo = Storage::disk('public')->put('images/cookie', $this->photo);
        }
        $this->co->save();
        return redirect(route('cookie.view'));
    }
    protected function rules(){
        return RulesEntry::rule();
    }
}
