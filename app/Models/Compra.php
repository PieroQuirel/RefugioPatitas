<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $primaryKey = 'compra_id';

    protected $fillable = [
        'detalles_compra',
        'usuario',
        'metodo_pago',
        'monto_total',
        'compra_direccion'
    ];

    public function detalles_compra(){
        return $this->belongsTo('App\Models\Detalles_Compra','detalles_compra_id','detalles_compra');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\User','id','usuario');
    }

    public function metodo_pago(){
        return $this->belongsTo('App\Models\Metodo_Pago','metodo__id','metodo_pago');
    }


}
