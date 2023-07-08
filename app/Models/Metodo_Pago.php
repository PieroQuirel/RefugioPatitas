<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodo_Pago extends Model
{
    use HasFactory;

    protected $table = 'metodo_pago';

    protected $primaryKey = 'metodo_id';

    protected $fillable = [
        'metodo_nombre',
        'metodo_descripcion',
        'metodo_estado'
    ];

    public function compra(){
        return $this->hasOne('App\Models\Compra','metodo_pago','metodo_id');
    }

}
