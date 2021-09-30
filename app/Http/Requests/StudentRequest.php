<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'nom'=>['required', 'string'],
            'prenom'=>['required', 'string'],
            'dateNaissance'=>['required', 'date', 'max:' . date('Y-m-d')],
            'email'=>['required', 'email'],
            'tel'=>['required', 'string'],
            //
        ];
    }
}
