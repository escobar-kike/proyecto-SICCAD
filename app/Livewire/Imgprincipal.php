<?php

namespace App\Livewire;

use App\Models\Cuerpos;
use Livewire\Component;
use Livewire\WithFileUploads;

class Imgprincipal extends Component
{
    use WithFileUploads;

    public $photo;  
    public function render()
    {
        return view('livewire.imgprincipal');
    }

    public function save (){
        $this->validate([
            'photo' => 'image|max:2048',
        ]);
        $photo = $this->photo->store('public\Imgprincipal');

       // Cuerpos::create([
          //  'imgprincipal'=> $photo,
           
        //]);
      
    }
}
