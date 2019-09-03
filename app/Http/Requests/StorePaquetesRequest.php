<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaquetesRequest extends FormRequest
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
            'cantidad' => 'required',
            'precio' => 'required',
            'periodo' => 'required',
            'descripcionPaquete' => 'required',
        ];
    }
  
    public function messages()
    {
        return[
            'cantidad.required' => 'La cantidad de personas del paquete es un campo obligatrio ',
            'precio.required' => 'El precio del paquete es campo obligatorio',
            'periodo.required' => 'El periodo del paquete es obligatorio',
            'descripcionPaquete.required' => 'La descripcion (nombre) del paquete es campo obligatorio',
        ];
    }
}
