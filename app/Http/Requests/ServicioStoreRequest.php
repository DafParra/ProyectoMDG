<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioStoreRequest extends FormRequest
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
            "nombre"=>'required|min:4',
            "apellido"=>'required|min:4',
            "email"=>'email|unique:customer,Email'
        ];
    }
    public function messages()
    {
        return[
            "required"=>"Campo obligatorio",
            "min"=>"Solo :min caracterres",
            "email"=>"Ingresa un correo valido",
            "unique"=>"Correo Ocupado"
        ];

        }
    }
