<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Adopcion extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $primaryKey = 'solicitud_id';

    public function adoptante(){
        return $this->belongsTo('App\Models\User','id','adoptante');
    }

    public function mascota(){
        return $this->belongsTo('App\Models\Mascota','mascota_id','mascota');
    }

    public function respuesta(){
        return $this->hasMany('App\Models\Respuesta','solicitud','solicitud_id');
    }
}
