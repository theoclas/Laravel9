<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMascotaRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules(): array
{
    return [
            'nombre' => 'required|string|max:100',
            'especie' => 'required|string|max:50',
            'raza' => 'nullable|string|max:100',
            'edad' => 'required|integer|min:0',
            'persona_id' => 'required|exists:personas,id',
    ];
}

}
