<?php

use App\Http\Controllers\CarpetaDeInvestigacionController;
use App\Http\Controllers\CategoriaFotosController;

use App\Http\Controllers\CuerposController;
use App\Http\Controllers\CuerposDictamenesController;

use App\Http\Controllers\DictamenesController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\TiposDeHechosController;
use App\Http\Controllers\UserController;
use App\Models\Cuerpos;
use App\Models\Dictamen;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',


])->group(function () {
    
    
    Route::resource('dictamenes', DictamenesController::class);

        Route::resource('users', UserController::class);

        Route::resource('tipohechos', TiposDeHechosController::class);

        Route::resource('Catefotos', CategoriaFotosController::class);

        Route::resource('CarpetadeInv', CarpetaDeInvestigacionController::class);

        Route::resource('Cuerpos', CuerposController::class);

        Route::resource('cuerpos_dictamenes', CuerposDictamenesController::class);

        Route::resource('Imagenes', ImagenesController::class);
    
    
        Route::get('/dashboard', function () {
            
            return redirect()->route('Cuerpos.index');
        })->name('dashboard');
    
  
   
});





//Route::post('dictamenes', [DictamenController::class, 'store'])->name('dictamenes.store');
//Route::get('dictamenes',[DictamenController::class, 'index']);

//Route::post('cuerpo', [CuerposController::class, 'store'])->name('cuerpo.store');