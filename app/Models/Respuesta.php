<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    
    protected $table = 'respuestas';

    protected $primaryKey = 'respuesta_id';

    public function solicitud_adopcion(){
        return $this->belongsTo('App\Models\Solicitud_Adopcion','solicitud_id','solicitud');
    }
}
