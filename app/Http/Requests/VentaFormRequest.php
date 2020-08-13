<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaFormRequest extends FormRequest
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
            'id_venta' => 'required',
            'id_cliente' => 'required',
            'total_venta' => 'required',
            'tipo_venta' => 'required',
            'estado' => 'required',
            'id_venta' => 'required',
            'id_producto' => 'required',
            'cantidad' => 'required',
            'precio_venta_uni' => 'required',
        ];
    }
}
