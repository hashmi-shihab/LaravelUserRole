<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FertilityClass extends Model
{
    protected $fillable=
        [
            'land_type_id',
            'land_Class_id',
            'texture_id',
            'cultivation_type_id',
            'district_id',
            'upazila_id',

            'pH',
            'stateOfpH_id',
            'organicMatter',
            'stateOforganicMatter_id',
            'calcium',
            'stateOfcalcium_id',
            'magnesium',
            'stateOfmagnesium_id',
            'potassium',
            'stateOfpotassium_id',
            'nitrogen',
            'stateOfnitrogen_id',
            'phosphorus',
            'stateOfphosphorus_id',
            'sulfur',
            'stateOfsulfur_id',
            'boron',
            'stateOfboron_id',
            'copper',
            'stateOfcopper_id',
            'ferrous',
            'stateOfferrous_id',
            'manganese',
            'stateOfmanganese_id',
            'zinc',
            'stateOfzinc_id'
        ];
}
