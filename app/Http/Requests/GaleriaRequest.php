<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriaRequest extends FormRequest
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
            "nombre" => "required|string|regex:/^[a-zA-Z ]*$/",
            "imagen" => "required|file|mimes:jpeg,png",
            "descripcion" => "required|max:200",
        ];
    }

    public function messages()
    {
        return[
       "imagen.required" => "Suba una imagen",
            "imagen.mimes" => "El Formato no es valido",
       "nombre.regex" => "En el nombre solo se admiten letras",
        ];
    }
}
