<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicio extends FormRequest
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
            //
            "fecha"=>'required',
            "peticion"=>'required|min:10',
            "usupeticion"=>'required|min:4',
            "tipservi"=>'required'
        ];
    }
    public function messages()
    {
        return[
            "fecha.required"=>"Campo obligatorio",
            "min"=>"Solo :min caracteres"
        ];

        }
}
