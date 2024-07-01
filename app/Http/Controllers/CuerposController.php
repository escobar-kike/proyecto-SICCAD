<?php

namespace App\Http\Controllers;

use App\Livewire\Cuerpo;
use App\Models\Cuerpos;
use Directory;
use Illuminate\Http\Request;
use App\Models\tipos_de_hechos;
use App\Models\dictamenes;
use App\Models\categoria_fotos;
use App\Models\imagenes;
use Illuminate\Http\RedirectResponse;
use Livewire\WithPagination;
use Illuminate\View\View;

class CuerposController extends Controller
{
    use WithPagination;
    


    public function index(){


  /*      $cuerpos = Cuerpos::where('CI', 'LIKE', '%'.$buscador.'%')
        ->orWhere('nombre', 'LIKE', '%'.$buscador.'%')
        ->orWhere('sexo', 'LIKE', '%'.$buscador.'%')
        ->orWhere('edad', 'LIKE', '%'.$buscador.'%')
        ->orWhere('edad2', 'LIKE', '%'.$buscador.'%')
        ->orWhere('tiposdehechos_id', 'LIKE', '%'.$buscador.'%')
        ->orWhere('causa_muerte', 'LIKE', '%'.$buscador.'%')
        ->orWhere('fecha', 'LIKE', '%'.$buscador.'%')
        ->latest('id')
        ->paginate(5)->withQueryString();
*/
       $cuerpos = Cuerpos::all();

        return view('Cuerpo.index', compact('cuerpos'));
    }


    public function create(){
        $cuerpos = Cuerpos::all();
        $tipos_de_hechos = tipos_de_hechos::all();
        $dictamenes = dictamenes::all();
        $categoria_fotos = categoria_fotos::all();
        return view('Cuerpo.create', compact('tipos_de_hechos', 'dictamenes', 'categoria_fotos'));
    }


    public function store(Request $request){
   
        Cuerpos::create($request->all());
        return redirect()->route('Cuerpos.index');

        


        //dd($request->all());
        
        /*$cuerpos->nombre = $request->nombre;
        $cuerpos->edad = $request->edad;
        $cuerpos->sexo = $request->sexo;
        $cuerpos->causa_de_muerte = $request->causa_de_muerte;
        $cuerpos->ubicacion = $request->ubicacion;
        
        $cuerpos->save();*/
       
    }

    public function edit(Cuerpos $Cuerpo){
      

    
       return view('Cuerpo.edit',compact('Cuerpo'));


    }

    public function show(Cuerpos $Cuerpo){
        

        return view('Cuerpo.show',compact('Cuerpo'));

    }


    public function destroy($id){
       // dd($id);
        $cuerpos = Cuerpos::find($id);
        $cuerpos->delete();

        return redirect()->route('Cuerpos.index');//->with('success', 'Tipo de hecho eliminado exitosamente!');
    
    
    }
}
