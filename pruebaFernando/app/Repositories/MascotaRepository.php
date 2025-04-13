<?php


namespace App\Repositories;

use App\Models\Mascotas;

class MascotaRepository
{
    public function all($perPage = 10)
    {
        return Mascotas::with('persona')->paginate($perPage);
    }

    public function find($id)
    {
        return Mascotas::with('persona')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Mascotas::create($data);
    }

    public function update(Mascotas $mascota, array $data)
    {
        $mascota->update($data);
        return $mascota;
    }

    public function delete(Mascotas $mascota)
    {
        return $mascota->delete();
    }
}
