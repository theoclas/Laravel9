<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MascotaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'especie' => $this->especie,
            'raza' => $this->raza,
            'edad' => $this->edad,
            'persona_id' => $this->persona_id,
        ];
    }
}
