<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddService extends FormRequest
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
            'service_name' => 'required|min:5',
            'service_desc' => 'required|min:40'
        ];
    }
}
