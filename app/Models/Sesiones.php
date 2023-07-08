<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
    use HasFactory;

    protected $table = 'sesiones';

    protected $primaryKey = 'sesion_id';

    protected $fillable = [
        'adoptante',
        'registro',
        'año_cita',
        'semana_cita',
        'dia_cita',
        'hora_cita',
        'asistencia'
    ];

    public function adoptante(){
        return $this->belongsTo('App\Models\User','id','adoptante');
    }

    public function registro(){
        return $this->belongsTo('App\Models\User','registro_id','registro');
    }
}
