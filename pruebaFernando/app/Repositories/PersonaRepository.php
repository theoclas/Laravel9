<?php
namespace App\Repositories;

use App\Models\Persona;

class PersonaRepository
{
    public function all($perPage = 10)
    {
        return Persona::paginate($perPage);
    }

    public function find($id)
    {
        return Persona::findOrFail($id);
    }

    public function create(array $data)
    {
        return Persona::create($data);
    }

    public function update(Persona $persona, array $data)
    {
        $persona->update($data);
        return $persona;
    }

    public function delete(Persona $persona)
    {
        return $persona->delete();
    }

    public function findWithMascotas($id)
    {
        return \App\Models\Persona::with('mascotas')->findOrFail($id);
    }

}
