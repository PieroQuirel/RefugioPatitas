<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Adopcion extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $primaryKey = 'solicitud_id';

    public function user(){
        return $this->belongsTo('App\Models\User','id','usuario');
    }

    public function mascota(){
        return $this->belongsTo('App\Models\Mascota','mascota_id','mascota');
    }

    public function administrador(){
        return $this->belongsTo('App\Models\Administrador','admin_id','administrador');
    }

    public function respuesta(){
        return $this->hasMany('App\Models\Respuesta','solicitud','solicitud_id');
    }
}
