<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeVal extends FormRequest
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
             'operator_name' => 'required',
             'operator_email' => 'required|unique:email',
             'operator_phone' => 'required |max:10 |min:10',
             'operator_address' => 'required',
            'title' => 'required|unique:posts|max:255',
            
        ];
    }
}
