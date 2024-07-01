<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tipos_de_hechos extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion','estado'];

    public function cuerpos()
    {
        return $this->hasMany(Cuerpos::class,'id');

        
        
    }

 }
