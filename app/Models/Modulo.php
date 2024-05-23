<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
   
    protected $fillable = ['nombre', 'codigo', 'profesor_id'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'cursa', 'modulo_id', 'alumno_id');
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

   
}
