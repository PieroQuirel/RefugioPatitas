<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;

    protected $table = 'veterinarios';

    protected $primaryKey = 'veterinario_id';

    public function registro_medico(){
        return $this->hasOne('App\Models\Registro_Medico', 'veterinario', 'veterinario_id');
    }
}