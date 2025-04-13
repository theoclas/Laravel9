<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PersonaService;
use App\Http\Requests\StorePersonaRequest;
use App\Http\Resources\PersonaResource;
use App\Models\Persona;

class PersonaController extends Controller
{
    protected $personaService;

    public function __construct(PersonaService $personaService)
    {
        $this->personaService = $personaService;
    }

    public function index()
    {
        $personas = $this->personaService->getAll();
        return PersonaResource::collection($personas);
    }

    public function store(StorePersonaRequest $request)
    {
        $persona = $this->personaService->create($request->validated());
        return new PersonaResource($persona);
    }

    public function show($id)
    {
        $persona = $this->personaService->getById($id);
        return new PersonaResource($persona);
    }

    public function update(StorePersonaRequest $request, Persona $persona)
    {
        $persona = $this->personaService->update($persona, $request->validated());
        return new PersonaResource($persona);
    }

    public function destroy(Persona $persona)
    {
        $this->personaService->delete($persona);
        return response()->json(['mensaje' => 'Persona eliminada con éxito'], 200);
    }

    public function mascotasPorPersona($id)
    {
        $persona = $this->personaService->getById($id);

        // Cargar mascotas con la relación
        $persona->load('mascotas');

        return response()->json([
            'persona' => [
                'id' => $persona->id,
                'nombre' => $persona->nombre,
                'email' => $persona->email,
                'fecha_nacimiento' => $persona->fecha_nacimiento,
            ],
            'mascotas' => MascotaResource::collection($persona->mascotas)
        ]);
    }

}
