<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name_bn'=>'required',
            'name_en'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name_bn.required'=>'State Bangla Name is required',
            'name_en.required'=>'State English Name is required',

        ];
    }
}
