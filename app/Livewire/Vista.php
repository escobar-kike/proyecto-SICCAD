<?php

namespace App\Livewire;

use App\Models\Cuerpos;
use App\Models\dictamenes;
use App\Models\imagenes;
use Livewire\Component;

class Vista extends Component
{
    
    public $cuerpo;
    public $imagenes;
    public $dictamenes;


   public function mount($id)
    {
        $this->cuerpo = Cuerpos::find($id);
        $this->imagenes = imagenes::all();
        $this->dictamenes = dictamenes::all();
    }


    public function render()
    {
        return view('livewire.vista');
    }
}
