<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextureValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name_bn' => 'required',
            'name_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_bn.required'=>'Texture Bangla Name is required',
            'name_en.required'=>'Texture English Name is required',

        ];
    }
}
