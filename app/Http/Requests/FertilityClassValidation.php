<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FertilityClassValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'land_type_id' => 'required',
            'land_Class_id' => 'required',
            'texture_id' => 'required',
            'cultivation_type_id' => 'required',
            'district_id' => 'required',
            'upazila_id' => 'required',
            'pH' => 'required',
            'stateOfpH_id' => 'required',
            'organicMatter' => 'required',
            'stateOforganicMatter_id' => 'required',
            'calcium' => 'required',
            'stateOfcalcium_id' => 'required',
            'magnesium' => 'required',
            'stateOfmagnesium_id' => 'required',
            'potassium' => 'required',
            'stateOfpotassium_id' => 'required',
            'nitrogen' => 'required',
            'stateOfnitrogen_id' => 'required',
            'phosphorus' => 'required',
            'stateOfphosphorus_id' => 'required',
            'sulfur' => 'required',
            'stateOfsulfur_id' => 'required',
            'boron' => 'required',
            'stateOfboron_id' => 'required',
            'copper' => 'required',
            'stateOfcopper_id' => 'required',
            'ferrous' => 'required',
            'stateOfferrous_id' => 'required',
            'manganese' => 'required',
            'stateOfmanganese_id' => 'required',
            'zinc' => 'required',
            'stateOfzinc_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'land_type_id.required'=>'Land Type is required',
            'land_Class_id.required'=>'land Class is required',
            'texture_id.required'=>'Texture is required',
            'cultivation_type_id.required'=>'Cultivation Type is required',
            'district_id.required'=>'District is required',
            'upazila_id.required'=>'Upazila is required',


            'pH.required'=>'pH is required',
            'stateOfpH_id.required'=>'State Of pH is required',
            'organicMatter.required'=>'Organic Matter is required',
            'stateOforganicMatter_id.required'=>'State Of Organic Matter is required',
            'calcium.required'=>'Calcium is required',
            'stateOfcalcium_id.required'=>'State Of Calcium is required',
            'magnesium.required'=>'Magnesium is required',
            'stateOfmagnesium_id.required'=>'State Of Magnesium is required',
            'potassium.required'=>'Potassium is required',
            'stateOfpotassium_id.required'=>'State Of Potassium is required',
            'nitrogen.required'=>'Nitrogen is required',
            'stateOfnitrogen_id.required'=>'State Of Nitrogen is required',
            'phosphorus.required'=>'Phosphorus is required',
            'stateOfphosphorus_id.required'=>'State Of Phosphorus is required',
            'sulfur.required'=>'Sulfur is required',
            'stateOfsulfur_id.required'=>'State Of Sulfur is required',
            'boron.required'=>'Boron is required',
            'stateOfboron_id.required'=>'State Of Boron is required',
            'copper.required'=>'Copper is required',
            'stateOfcopper_id.required'=>'State Of Copper is required',
            'ferrous.required'=>'Ferrous is required',
            'stateOfferrous_id.required'=>'State Of Ferrous is required',
            'manganese.required'=>'Manganese is required',
            'stateOfmanganese_id.required'=>'State Of Manganese is required',
            'zinc.required'=>'Zinc is required',
            'stateOfzinc_id.required'=>'State Of Zinc is required',



        ];
    }
}
