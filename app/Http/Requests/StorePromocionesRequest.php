<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromocionesRequest extends FormRequest
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'dias' => 'required',
            'fechaInicio' => 'required',
            'fechaTermino' => 'required',
            'imagen' => 'image',
        ];
    }

     /**
     * Da los mensajes de error de el formualrio
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la promoción es obligatorio',
            'descripcion.required' => 'La descripción de la promoción es obligatoria',
            'dias.required' => 'El campo de los dias de la promoción es obligatoria ',
            'fechaInicio.required' => 'La fecha de inicio es obligatoria',
            'fechaTermino.required' => 'La fecha de termino es obligatoria',
            'imagen.image' => 'La imagen de la promocion debe ser un archivo de imagen',
        ];
    }
}
