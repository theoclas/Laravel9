<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre', 'email', 'fecha_nacimiento'];

    public function mascotas()
    {
        return $this->hasMany(Mascotas::class);
    }

}
