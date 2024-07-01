<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\categoria_fotos;
use App\Models\imagenes;

class Catefoto extends Component
{
    public imagenes $imagenes;
    
    use WithFileUploads;
    public $photo;
    public $descripcion, $cuerpos_id;
    
    public function render()
    {
       
        return view('livewire.catefoto');
    }

    public function save (){

        $imagenes = imagenes::create([
            'descripcion'=>$this->descripcion,
            'cuerpos_id'=>$this->cuerpos_id,
            //'rutaimg' => $rutaimg
           
        ]);
        $this->validate([
            'photo' => 'image|max:2048'
        ]);
        
        $imagenes->rutaimg = $this->photo->store('public\Categoriafoto');
        
        $imagenes->save();
            
            

        
        $this->reset('descripcion', 'cuerpos_id');
    }

    public function getCategoFotosProperty(){
        return categoria_fotos::all();
    }

    
}
