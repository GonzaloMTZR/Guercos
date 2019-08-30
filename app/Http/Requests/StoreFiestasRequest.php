<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFiestasRequest extends FormRequest
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
            'fechaFiesta' => 'required|date',
            'fechaReservacion' => 'required|date',
            'horaInicio' => 'required|date_format:H:i',
            'horaFinal' => 'required|date_format:H:i',
            'horaComida' => 'required|date_format:H:i',
            'salon' => 'required',
            'partyStatus' => 'required',
            'nombreNiño' => 'required',
            'fechaNacNiño' => 'required',
            'edadNiño' => 'required',
            'nombrePapa' => 'required',
            'telefonoCasa' => 'required',
            'telefonoCelular' =>'required',
            'correo' => 'required|email',
            'ciudad' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'idPaquete' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fechaFiesta.required' => 'El campo de la fecha de la fiesta es obligatorio',
            'fechaFiesta.date' => 'El campo de la fecha de la fiesta debe de ser una fecha',

            'fechaReservacion.required' => 'El campo de la fecha de reservación es obligatorio',
            'fechaReservacion.date' => 'El campo de la fecha de reservación debe de ser una fecha',

            'horaInicio.required' => 'El campo de la hora de inicio es obligatorio',
            'horaFinal.required' => 'El campo de la hora de termino es obligatorio',
            'horaComida.required' => 'El campo de la hora de servir (comida) es obligatorio',

            'salon.required' => 'El campo del salon el obligatorio',
            'partyStatus.required' => 'El campo de el estatus de la fiesta es obligatorio',
            'nombreNiño.required' => 'El campo del nombre del niño es obligatorio',
            'fechaNacNiño.required' => 'El campo de la fecha de cumpleaños es obligatorio',
            'edadNiño.required' => 'El campo de la edad del niño es obligatorio',
            'nombrePapa.required' => 'El campo del nombre del papá (cliente) es obligatorio',
            'telefonoCasa.required' => 'El campo del telefono de casa es obligatorio',
            'telefonoCelular.required' =>'El campo del telefono celular es obligatorio',
            'correo.required' => 'El campo del correo es obligatorio',
            'ciudad.required' => 'El campo de la ciudad es obligatorio',
            'colonia.required' => 'El campo de la colonia es obligatorio',
            'calle.required' => 'El campo de la calle es obligatorio',
            'idPaquete.required' => 'El campo del paquete de fiesta es obligatorio',
        ];
    }
}
