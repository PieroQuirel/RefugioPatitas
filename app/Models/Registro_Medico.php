<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_Medico extends Model
{
    use HasFactory;
    
    protected $table = 'registro';

    protected $primaryKey = 'registro_id';

    public function mascota(){
        return $this->belongsTo('App\Models\Mascota','mascota_id','mascota');
    }

    public function veterinario(){
        return $this->belongsTo('App\Models\User','id','veterinario');
    }
}