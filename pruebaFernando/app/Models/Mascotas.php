<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    protected $fillable = ['nombre', 'especie', 'raza', 'edad', 'persona_id', 'imagen'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

}
