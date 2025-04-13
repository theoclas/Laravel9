<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
{
    public function authorize() {
        return true;
    }



    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:personas,email,' . $this->persona,
            'fecha_nacimiento' => 'required|date',
        ];
    }

}
