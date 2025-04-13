<?php
namespace App\Services;

use App\Repositories\PersonaRepository;
use App\Models\Persona;

class PersonaService
{
    protected $personaRepo;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepo = $personaRepo;
    }

    public function getAll($perPage = 10)
    {
        return $this->personaRepo->all($perPage);
    }

    public function getById($id)
    {
        return $this->personaRepo->find($id);
    }

    public function create(array $data)
    {
        return $this->personaRepo->create($data);
    }

    public function update(Persona $persona, array $data)
    {
        return $this->personaRepo->update($persona, $data);
    }

    public function delete(Persona $persona)
    {
        return $this->personaRepo->delete($persona);
    }

    public function getPersonaConMascotas($id)
    {
        return $this->personaRepo->findWithMascotas($id);
    }

}
