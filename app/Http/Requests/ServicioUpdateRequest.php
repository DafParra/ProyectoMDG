<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioUpdateRequest extends FormRequest
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
            "peticion"=>'required|min:4'
        ];
    }
    public function messages()
    {
        return[
            "required"=>"Campo obligatorio",
            "min"=>"Solo :min caracterres",
            "email"=>"Ingresa un correo valido"
        ];

        }
    }
