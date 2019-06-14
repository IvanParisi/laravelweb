<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            "nombre" => "required|string",
            "imagen" => "file|mimes:jpeg,png",
            "descripcion" => 'required|max:250',
            "precio" => "required",
            "tipo_productos_id" => "required|exists:tipo_productos,id",
        ];
    }
}
