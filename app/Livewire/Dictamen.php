<?php

namespace App\Livewire;

use App\Models\cuerpos_dictamenes;
use App\Models\dictamenes;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dictamen extends Component
{
    public cuerpos_dictamenes $cuerpos_dictamenes;
    
    use WithFileUploads;
    public $pdf;
    public $dictamenes_id;


   
    public function save (){

        $cuerpos_dictamenes = cuerpos_dictamenes::create([
            'dictamenes_id' => $this->dictamenes_id
        ]);


        $this->validate([
            'pdf' => 'file'
        ]);
        $this->pdf->store('public\Dictamenes');
    }

    public function getDictamenesProperty(){
        return dictamenes::all();
    }
    
    
    
    public function render()
    {
        return view('livewire.dictamen');
    }

}
