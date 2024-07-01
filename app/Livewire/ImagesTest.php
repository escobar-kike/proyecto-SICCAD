<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Cuerpos;

class ImagesTest extends Component
{
    use WithFileUploads;

    public $photo;  
    public function render()
    {
        return view('livewire.images-test');
    }

    public function save (){
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        $this->photo->store('public\imagenes');
    }
}
