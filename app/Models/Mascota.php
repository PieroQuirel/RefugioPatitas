<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';

    protected $primaryKey = 'mascota_id';

    protected $fillable = [
        'mascota_nombre',
        'tipo',
        'raza',
        'mascota_edad',
        'fecha_recojo',
        'mascota_imagen',
        'mascota_descripcion'
    ];

    public function registro_medico(){
        return $this->hasOne('App\Models\Registro_Medico','mascota','mascota_id');
    }

    public function foto(){
        return $this->hasMany('App\Models\Foto','mascota','mascota_id');
    }
}