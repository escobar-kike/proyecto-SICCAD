<?php

namespace App\Http\Controllers;

use App\Models\cuerpos_dictamenes;
use Illuminate\Http\Request;

class CuerposDictamenesController extends Controller
{
    public function index(){

        $cuerpos_dictamenes  = cuerpos_dictamenes::all();
        return view ('Cuerpo.index', compact('cuerpos_dictamenes'));
    }

    public function create(){
        $cuerpos_dictamenes = cuerpos_dictamenes::all();

        return view('Cuerpo.index', compact('cuerpos_dictamenes'));

    }
}
