<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cuerpos extends Model
{
    use HasFactory;
    protected $fillable = ['CI', 'identificado', 'nombre', 'apellidop', 'apellidom', 'edad', 'edad2', 'sexo', 'causa_muerte', 'ubicacion', 'tiposdehechos_id', 'fecha', 'imgprincipal' ];
    
    public function tipos_de_hechos(){
        return $this->belongsTo(tipos_de_hechos::class,'tiposdehechos_id');
    }

    public function categoria_fotos(){
        return $this->belongsTo(categoria_fotos::class);
    }

    public function imagenes(){
        return $this->hasMany(imagenes::class);
    }

    public function cuerpos_dictamenes(){
        return $this->hasMany(cuerpos_dictamenes::class);
    }
}
