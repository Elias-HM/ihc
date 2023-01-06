<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $fillable = [
        'nombre', 'abreviatura', 'estado'
    ];
    public function productos()
    {
        return $this->hasMany(UnidadMedida::class, 'id');
    }
}
