<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_fotos extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion'];
    
    public function cuerpos(){
        return $this->hasMany(Cuerpos::class,'id');
    }
}

