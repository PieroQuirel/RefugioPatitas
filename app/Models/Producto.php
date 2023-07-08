<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'producto_id';

    protected $fillable = [
        'producto_nombre',
        'stock',
        'precio',
        'proveedor',
        'producto_estado',
        'imagen',
        'descripcion'
    ];

    public function detalles_compra(){
        return $this->hasMany('App\Models\Detalles_Compra','producto','producto_id');
    }

}
