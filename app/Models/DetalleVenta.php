<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $fillable = [
        'idVenta',
        'idProducto',
        'cantidad',
        'precio',
        'descuento',
        'importe'
    ];
    public function Venta()
    {
        return $this->belongsTo(Venta::class);
    }
    public function Producto()
    {
        return $this->belongsTo(Producto::class);
    }
}