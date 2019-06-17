<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
        return
            [
                "nombre" => "required|string|unique:productos,nombre",
                "imagen" => "required|file|mimes:jpeg,png",
                "descripcion" => 'required|max:250',
                "precio" => "required|digits_between:3,4",
                "tipo_productos_id" => "required|exists:tipo_productos,id",
        ];
    }
    public function messages()
    {
        return [
            "tipo_productos_id.required" => "El campo tipo producto es obligatorio",
            "tipo_productos_id.exists" => "El campo tipo producto no coincide con uno de la lista",
            "imagen.required" => "La imagen es obligatoria",
        ];
    }
}
