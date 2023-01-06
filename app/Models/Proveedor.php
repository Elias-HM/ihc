<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre', 'documento', 'direccion', 'telefono', 'email'
    ];

    public function productos()
    {
        return $this->hasMany(Proveedor::class, 'id');
    }
}
