<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = ['dni', 'nombre', 'direccion', 'telefono'];

    public function modulo()
    {
        return $this->hasOne(Modulo::class);
    }
}
