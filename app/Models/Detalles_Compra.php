<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Compra extends Model
{
    use HasFactory;

    protected $table = 'detalles_compra';

    protected $primaryKey = 'detalles_compra_id';

    protected $fillable = [
        'producto',
        'cantidad',
        'descuento',
    ];

    public function compra(){
        return $this->hasOne('App\Models\Compra','detalles_compra','detalles_compra_id');
    }

    public function producto(){
        return $this->belongsTo('App\Models\Producto','producto_id','producto');
    }
}
