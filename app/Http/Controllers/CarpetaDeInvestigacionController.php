<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarpetaDeInvestigacionController extends Controller
{
    public function index(){


        
        return view('CarpetadeInv.index');
       }

       public function create(){
   
        return view('Cuerpo.index');
    }
}
