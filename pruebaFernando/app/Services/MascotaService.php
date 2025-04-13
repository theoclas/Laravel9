<?php
namespace App\Services;

use App\Repositories\MascotaRepository;
use App\Models\Mascotas;

class MascotaService
{
    protected $mascotaRepo;

    public function __construct(MascotaRepository $mascotaRepo)
    {
        $this->mascotaRepo = $mascotaRepo;
    }

    public function getAll($perPage = 10)
    {
        return $this->mascotaRepo->all($perPage);
    }

    public function getById($id)
    {
        return $this->mascotaRepo->find($id);
    }

    public function create(array $data)
    {
        return $this->mascotaRepo->create($data);
    }

    public function update(Mascotas $mascota, array $data)
    {
        return $this->mascotaRepo->update($mascota, $data);
    }

    public function delete(Mascotas $mascota)
    {
        return $this->mascotaRepo->delete($mascota);
    }
}

