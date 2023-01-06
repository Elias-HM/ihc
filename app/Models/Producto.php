<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'stock', 'precio', 'codBarras', 'idUnidadMedida', 'idProveedor', 'estado'
    ];

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class, 'idUnidadMedida');
    }
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedor');
    }
}
