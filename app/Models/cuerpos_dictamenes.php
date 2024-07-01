<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuerpos_dictamenes extends Model
{
    use HasFactory;

    public $fillable = ['dictamenes_id', 'cuerpos_id'];

    
}
