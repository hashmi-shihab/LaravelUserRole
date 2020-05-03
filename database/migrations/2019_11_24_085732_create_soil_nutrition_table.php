<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoilNutritionTable extends Migration
{

    public function up()
    {
        Schema::create('soil_nutrition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('land_type_id');
            $table->foreign('land_type_id')->references('id')->on('land_types');
            $table->unsignedBigInteger('land_Class_id');
            $table->foreign('land_Class_id')->references('id')->on('land_Classes');
            $table->unsignedBigInteger('texture_id');
            $table->foreign('texture_id')->references('id')->on('textures');
            $table->unsignedBigInteger('cultivation_type_id');
            $table->foreign('cultivation_type_id')->references('id')->on('cultivation_types');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('upazila_id');
            $table->foreign('upazila_id')->references('id')->on('upazilas');




            $table->string('pH');
            $table->unsignedBigInteger('stateOfpH_id');
            $table->foreign('stateOfpH_id')->references('id')->on('states');

            $table->string('organicMatter');
            $table->unsignedBigInteger('stateOforganicMatter_id');
            $table->foreign('stateOforganicMatter_id')->references('id')->on('states');

            $table->string('calcium');
            $table->unsignedBigInteger('stateOfcalcium_id');
            $table->foreign('stateOfcalcium_id')->references('id')->on('states');

            $table->string('magnesium');
            $table->unsignedBigInteger('stateOfmagnesium_id');
            $table->foreign('stateOfmagnesium_id')->references('id')->on('states');

            $table->string('potassium');
            $table->unsignedBigInteger('stateOfpotassium_id');
            $table->foreign('stateOfpotassium_id')->references('id')->on('states');

            $table->string('nitrogen');
            $table->unsignedBigInteger('stateOfnitrogen_id');
            $table->foreign('stateOfnitrogen_id')->references('id')->on('states');

            $table->string('phosphorus');
            $table->unsignedBigInteger('stateOfphosphorus_id');
            $table->foreign('stateOfphosphorus_id')->references('id')->on('states');

            $table->string('sulfur');
            $table->unsignedBigInteger('stateOfsulfur_id');
            $table->foreign('stateOfsulfur_id')->references('id')->on('states');

            $table->string('boron');
            $table->unsignedBigInteger('stateOfboron_id');
            $table->foreign('stateOfboron_id')->references('id')->on('states');

            $table->string('copper');
            $table->unsignedBigInteger('stateOfcopper_id');
            $table->foreign('stateOfcopper_id')->references('id')->on('states');

            $table->string('ferrous');
            $table->unsignedBigInteger('stateOfferrous_id');
            $table->foreign('stateOfferrous_id')->references('id')->on('states');

            $table->string('manganese');
            $table->unsignedBigInteger('stateOfmanganese_id');
            $table->foreign('stateOfmanganese_id')->references('id')->on('states');

            $table->string('zinc');
            $table->unsignedBigInteger('stateOfzinc_id');
            $table->foreign('stateOfzinc_id')->references('id')->on('states');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('soil_nutrition');
    }
}
