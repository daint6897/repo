<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKirequest extends FormRequest
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
            'pass'=>'required',
            'ten'=>'required',
            'imgUpload'=>'image',
        ];
    }
    public function messages()
    {
        return [
            'pass.required'=>'nhap ten mon hoc',
            'ten.required'=>'nhap so dien thoai',
        ];
    }
}
