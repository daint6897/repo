<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'txtUser'=>'required',
            'txtPass'=>'required',
            'txtRepass'=>'required',
            'rdoLevel'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'txtUser.required'=>'nhap thieu user name',
            'txtPass.required'=>'nhap thieu passs',
            'txtRepass.required'=>'nhap thieu repass',
            'rdoLevel.required'=>'nhap thieu level',
        ];
    }
}
