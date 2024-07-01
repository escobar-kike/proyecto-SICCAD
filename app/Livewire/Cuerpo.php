<?php

namespace App\Livewire;

use App\Models\categoria_fotos;
use App\Models\Cuerpos;
use App\Models\cuerpos_dictamenes;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\dictamenes;
use App\Models\imagenes;
use App\Models\tipos_de_hechos;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

use function Livewire\store;

class Cuerpo extends Component
{
    use WithFileUploads;

    public Cuerpos $cuerpos;

    public $photo;

    public $CI, $identificado, $nombre,
        $apellidop, $apellidom,
        $edad, $edad2, $sexo,
        $causa_muerte, $ubicacion, $tiposdehechos_id, $fecha, $imgprincipal;

    
    public $imagenes = [];
    public $categoriaft;
    public $categorias_id;
    public $dataimages;

    public $archipdf = [];
    public $dictamenes;
    public $datarchivo;
    public $dictamen_id;


    /*protected $rules =[

        'CI' => 'required',
        'identificado' => 'required',
        'nombre' => 'required',
        'apellidop' => 'required',
        'apellidom' => 'required',
        'edad' => 'required',
        'edad2' => 'required',
        'sexo' => 'required',
        'fecha' => 'required',
        'causa_muerte' => 'required',
        'ubicacion' => 'required',
        'tiposdehechos_id' => 'required'
    
    ];*/


    public function mount(){

        $this->categoriaft = categoria_fotos::all();
        $this->fill(['dataimages' => collect([])]);
        $this->fill(['categorias_id' => collect([])]);

        $this->dictamenes = dictamenes::all();
        $this->fill(['datarchivo' => collect([])]);
        $this->fill(['dictamen_id' => collect([])]);
        
    }

    public function save()
    {
        // $cuerpos = $this->validate();

        //dd($this->datarchivo);

        $cuerpos = new Cuerpos();

        $this->imgprincipal->store('public\imgprincipal');
        $cuerpos->CI = $this->CI;
        $cuerpos->identificado = $this->identificado;
        $cuerpos->nombre = $this->nombre;
        $cuerpos->apellidop = $this->apellidop;
        $cuerpos->apellidom = $this->apellidom;
        $cuerpos->edad = $this->edad;
        $cuerpos->edad2 = $this->edad2;
        $cuerpos->sexo = $this->sexo;
        $cuerpos->fecha = $this->fecha;
        $cuerpos->causa_muerte = $this->causa_muerte;
        $cuerpos->ubicacion = $this->ubicacion;
        $cuerpos->tiposdehechos_id = $this->tiposdehechos_id;
        $cuerpos->imgprincipal = $this->imgprincipal->hashName();
        $cuerpos->save();

        //$this->reset();

        if (count($this->imagenes) > 0) {
            foreach ($this->imagenes as $key => $image) {

                $image->store('public\Categoriafoto');
                $imagen = new imagenes(); 
                $imagen->rutaimg = $image->hashName();
                $imagen->descripcion = $this->dataimages[$key]["descripcion"];
                $imagen->categoriasft_id = $this->dataimages[$key]["categoriasft_id"];
                $imagen->cuerpos_id = $cuerpos->id;
                $imagen->save();

            }
        }

        if (count($this->archipdf) > 0){
            foreach ($this->archipdf as $key => $pdf){

                $pdf->store('public\Dictamenes');
                $dictamen = new cuerpos_dictamenes();
                $dictamen->rutapdf = $pdf->hashName();
                $dictamen->dictamenes_id = $this->datarchivo[$key]["dictamenes_id"];
                $dictamen->cuerpos_id = $cuerpos->id;
                $dictamen->save();
            }
        }

        return redirect()->route('Cuerpos.index');
    }

    public function edit(){
        

    }


    public function render()
    {
        //$cuerpos= Cuerpos::all();
        return view('livewire.cuerpo');
    }


    public function getTiposHechosProperty()
    {
        return tipos_de_hechos::all();
    }

  
}
