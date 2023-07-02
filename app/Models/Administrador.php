<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administradores';

    protected $primaryKey = 'admin_id';

    public function solicitud_adopcion(){
        return $this->hasMany('App\Models\Solicitud_Adopcion','administrador','admin_id');
    }
}
