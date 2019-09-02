<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosRequest extends FormRequest
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
            'codigo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'area' => 'required',
            'infinito' => 'required',
            'tipoUnidad' => 'required',
            'categoria' => 'required',
            'imagenProducto' => 'image',
        ];
    }

    /**
     * Da los mensajes de los errores que hay en el formulario
     *
     * @return array
     */
    public function messages()
    {
        return [
            'codigo.required' => 'El codigo del producto es obligatorio',
            'descripcion.required' => 'La descripcion del producto es obligatoria',
            'precio.required' => 'El precio del prodcuto es obligatorio',
            'stock.required' => 'El stock es un campo obligatorio',
            'area.required' => 'El campo del area a la que pertenece el producto es obligatoria',
            'infinito.required' => 'El campo de si es infinito es obligatorio',
            'tipoUnidad.required' => 'El tipo de unidad del producto es obligatorio',
            'categoria.required' => 'La categoria del producto es obligatoria',
            'imagenProducto.image' => 'El archivo que subió debe de ser una imagen',
        ];
    }
}
