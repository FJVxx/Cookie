<?php

namespace App\Http\Livewire\Cookie;

use App\Models\Cookie;
use App\Models\CooUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;
    public Cookie $co; 
    public $photo; 
    public $autor;

    public function mount(){
        $this->co = new Cookie();
    }

    public function render()
    {
        $user = CooUser::all();
        return view('livewire.cookie.create');
    }

    public function createRecipe(){
        
        $this->validate();
        if( $this->photo != null){
            $this->co->photo = Storage::disk('public')->put('images/cookie', $this->photo);
        }
        
        $this->co->id_user = Auth::user()->id;
        $this->co->save();
        return redirect(route('cookie.view'));
    }
    protected function rules(){
        return RulesEntry::rule();
    }
}
