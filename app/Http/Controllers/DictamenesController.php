<?php

namespace App\Http\Controllers;

use App\Models\dictamenes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DictamenesController extends Controller
{
    public function index(): View{

        $dictamenes = dictamenes::latest()->get();    
        
        return view('Dictamenes.list', ['dictamenes' => $dictamenes] );
       }

    public function create(){
   
        return view('Dictamenes.index');
    }

    public function store(Request $request): RedirectResponse{

        $request->validate([
            'descripcion' => 'required'
        ]);

        dictamenes::create($request->all());
        return redirect()->route('dictamenes.index')->with('success', 'Nuevo Dictamen Creado Exitosamente!');
        
    }

    public function edit($id): View{

        $dictamenes = dictamenes::find($id);
        return view('Dictamenes.edit', ['dictamenes' => $dictamenes]);
        
    } 

    public function update(Request $request, $id): RedirectResponse{

        $request->validate([
            'descripcion' => 'required'
        ]);

       
        $dictamenes = dictamenes::find($id);

        $dictamenes->descripcion = $request->get('descripcion');


        $dictamenes->save();

        return redirect()->route('dictamenes.index')->with('edit', 'Dictamen Actualizado Exitosamente!');        
    }

    public function destroy($id): RedirectResponse{
        
        $dictamenes = dictamenes::find($id);
        $dictamenes->delete();

        return redirect()->route('dictamenes.index')->with('delet', 'Dictamene Eliminado Exitosamente!');
    }

}
