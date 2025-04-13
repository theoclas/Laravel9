<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMascotaRequest;
use App\Http\Resources\MascotaResource;
use App\Models\Mascotas;
use App\Services\MascotaService;

class MascotaController extends Controller
{
    protected $mascotaService;

    public function __construct(MascotaService $mascotaService)
    {
        $this->mascotaService = $mascotaService;
    }

    public function index()
    {
        $mascotas = $this->mascotaService->getAll();
        return MascotaResource::collection($mascotas);
    }

    public function store(StoreMascotaRequest $request)
    {
        $mascota = $this->mascotaService->create($request->validated());
        return new MascotaResource($mascota);
    }

    public function show($id)
    {
        $mascota = $this->mascotaService->getById($id);
        return new MascotaResource($mascota);
    }

    public function update(StoreMascotaRequest $request, Mascotas $mascota)
    {
        $mascota = $this->mascotaService->update($mascota, $request->validated());
        return new MascotaResource($mascota);
    }

    public function destroy(Mascotas $mascota)
    {
        $this->mascotaService->delete($mascota);
        return response()->json(['mensaje' => 'Mascota eliminada con éxito'], 200);
    }
}
