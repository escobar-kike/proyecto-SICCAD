<?php

namespace App\Http\Controllers;

use App\Models\categoria_fotos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoriaFotosController extends Controller
{
    public function index(){

        $categoria_fotos = categoria_fotos::latest()->get();    
        
        return view('CategoriaFoto.lista', ['categoria_fotos' => $categoria_fotos] );
       }

    public function create(){
   
        return view('CategoriaFoto.index');
    }

    public function store(Request $request): RedirectResponse{

        $request->validate([
            'descripcion' => 'required',

        ]);

        categoria_fotos::create($request->all());
        return redirect()->route('Catefotos.index')->with('success', 'Nueva Categoria de Foto Creada Exitosamente!');
        
    }

    public function edit($id): View{

        $categoria_fotos = categoria_fotos::find($id);
        return view('CategoriaFoto.edit', ['categoria_fotos' => $categoria_fotos]);
        
    } 

    public function update(Request $request, $id): RedirectResponse{

        $request->validate([
            'descripcion' => 'required',
        ]);

       
        $categoria_fotos = categoria_fotos::find($id);

        $categoria_fotos->descripcion = $request->get('descripcion');

        $categoria_fotos->save();

        return redirect()->route('Catefotos.index')->with('edit', 'Categoria de Foto Actualizado Exitosamente!');        
    }

    public function destroy($id): RedirectResponse{
        
        $categoria_fotos = categoria_fotos::find($id);
        $categoria_fotos->delete();

        return redirect()->route('Catefotos.index')->with('delet', 'Categoria de Foto Eliminado exitosamente!');
    }

}
