<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    use HasFactory;
    protected $fillable = [ 'descripcion', 'cuerpos_id', 'rutaimg', 'categoriasft_id'];

    public function categoria_fotos(){
        return $this->belongsTo(categoria_fotos::class,'cuerpos_id');

        
    }

}
