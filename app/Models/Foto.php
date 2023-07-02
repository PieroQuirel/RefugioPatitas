<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;
    
    protected $table = 'foto';

    protected $primaryKey = 'foto_id';

    public function mascota(){
        return $this->belongsTo('App\Models\Mascota','mascota_id','mascota');
    }
}
