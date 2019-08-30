<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientesRequest extends FormRequest
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
            'nombrePapa' =>'required',
            'nombreNiño' =>'required',
            'fechaNacNiño' =>'required|date',
            'telefonoCasa' =>'required',
            'telefonoCelular' =>'required',
            'correo' =>'required|email',
            'ciudad' =>'required',
            'colonia' =>'required',
            'calle' =>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'nombreNiño.required' => 'El campo del nombre del niño es obligatorio',
            'fechaNacNiño.required' => 'El campo de la fecha de cumpleaños es obligatorio',
            'nombrePapa.required' => 'El campo del nombre del papá (cliente) es obligatorio',
            'telefonoCasa.required' => 'El campo del telefono de casa es obligatorio',
            'telefonoCelular.required' =>'El campo del telefono de casa es obligatorio',
            'correo.required' => 'El campo del correo es obligatorio',
            'ciudad.required' => 'El campo de la ciudad es obligatorio',
            'colonia.required' => 'El campo de la colonia es obligatorio',
            'calle.required' => 'El campo de la calle es obligatorio',
            'idPaquete.required' => 'El campo del paquete de fiesta es obligatorio',
        ];
    }
}
