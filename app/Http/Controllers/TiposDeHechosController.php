<?php

namespace App\Http\Controllers;

use App\Models\tipos_de_hechos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TiposDeHechosController extends Controller
{
    public function index(): View{

        $tipos_de_hechos = tipos_de_hechos::latest()->get();    
        
        return view('TiposHechos.lista', ['tipos_de_hechos' => $tipos_de_hechos] );
       }

    public function create(): View{
   
        return view('TiposHechos.index');
    }

    public function store(Request $request): RedirectResponse{

        $request->validate([
            'descripcion' => 'required'
        ]);

        tipos_de_hechos::create($request->all());
        return redirect()->route('tipohechos.index')->with('success', 'Nuevo Tipo de Hecho Creado Exitosamente!');
        
    }

    public function edit($id): View{

        $tipos_de_hechos = tipos_de_hechos::find($id);
        return view('TiposHechos.edit', ['tipos_de_hechos' => $tipos_de_hechos]);
        
    } 

    public function update(Request $request, $id): RedirectResponse{

        $request->validate([
            'descripcion' => 'required'
        ]);

       
        $tipos_de_hechos = tipos_de_hechos::find($id);

        $tipos_de_hechos->descripcion = $request->get('descripcion');

        $tipos_de_hechos->save();

        return redirect()->route('tipohechos.index')->with('edit', 'Tipo de Hecho Actualizado Exitosamente!');        
    }

    public function destroy($id): RedirectResponse{
        
        $tipos_de_hechos = tipos_de_hechos::find($id);
        $tipos_de_hechos->delete();

        return redirect()->route('tipohechos.index')->with('delet', 'Tipo de Hecho Eliminado Exitosamente!');
    }

}
