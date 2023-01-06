<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'tipoComprobante',
        'serie',
        'numero',
        'fecha',
        'ventaTotal',
        'descuento',
        'subTotal',
        'impuestoAfecto',
        'impuestoInafecto',
        'total',
        'estado',
        'idCliente',
        'idUsuario',
        'codHash'
    ];
    public function cliente()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function detalleVentas()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}