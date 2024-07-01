<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use App\Http\Requests\StoreimagenesRequest;
use App\Http\Requests\UpdateimagenesRequest;
use App\Models\Cuerpos;
use Illuminate\Support\Facades\Storage;

class ImagenesController extends Controller
{
  
  

    public function index()
    {
        return view('CategoriaFoto.create');
        
        
        
        
        //$imagenes = [];

       // return view('Cuerpo.index', ["imagenes"=>$imagenes]);

    }

   
    public function create()
    {
        $cuerpos = Cuerpos::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreimagenesRequest $request)
    {
        imagenes::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(imagenes $imagenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(imagenes $imagenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateimagenesRequest $request, imagenes $imagenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(imagenes $imagenes)
    {
        //
    }
}
