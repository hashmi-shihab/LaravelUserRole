<?php

namespace App\Http\Controllers;

use App\CultivationType;
use App\District;
use App\LandClass;
use App\LandType;
use App\SoilNutrition;
use App\State;
use App\Texture;
use App\Upazila;
use Illuminate\Http\Request;
use App\Http\Requests\SoilNutritionValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\OldSoilNutrition;

class SoilNutritionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if (Auth::user()->can('soilNutritionList')) {

            $soilNutritions = DB::table('soil_nutrition as snt')
                ->join('land_types as lt','snt.land_type_id','=','lt.id')
                ->join('land_classes as lc','snt.land_Class_id','=','lc.id')
                ->join('textures as t','snt.texture_id','=','t.id')
                ->join('cultivation_types as ct','snt.cultivation_type_id','=','ct.id')
                ->join('districts as dis','snt.district_id','=','dis.id')
                ->join('upazilas as upa','snt.upazila_id','=','upa.id')
                ->join('states as spH','snt.stateOfpH_id','=','spH.id')
                ->join('states as soM','snt.stateOforganicMatter_id','=','soM.id')
                ->join('states as sCa','snt.stateOfcalcium_id','=','sCa.id')
                ->join('states as smg','snt.stateOfmagnesium_id','=','smg.id')
                ->join('states as sK','snt.stateOfpotassium_id','=','sK.id')
                ->join('states as sN','snt.stateOfnitrogen_id','=','sN.id')
                ->join('states as sP','snt.stateOfphosphorus_id','=','sP.id')
                ->join('states as sS','snt.stateOfsulfur_id','=','sS.id')
                ->join('states as sB','snt.stateOfboron_id','=','sB.id')
                ->join('states as sCu','snt.stateOfcopper_id','=','sCu.id')
                ->join('states as sFe','snt.stateOfferrous_id','=','sFe.id')
                ->join('states as sMn','snt.stateOfmanganese_id','=','sMn.id')
                ->join('states as sZn','snt.stateOfzinc_id','=','sZn.id')


                ->select('snt.*','lt.name_en as ltN','lc.name_en as lCN','t.name_en as tN','ct.name_en as cTN','dis.name as disN','upa.name as upaN','spH.name_en as spH','soM.name_en as soM','sCa.name_en as sCa','smg.name_en as smg','sK.name_en as sK','sN.name_en as sN','sP.name_en as sP','sS.name_en as sS','sB.name_en as sB','sCu.name_en as sCu','sFe.name_en as sFe','sMn.name_en as sMn','sZn.name_en as sZn')

                ->get();

    //        dd($fertilities);

            return view('admin.soilNutrition.list',compact('soilNutritions'));
            }
        return view('admin.unauthorized');
    }


    public function create()
    {
        if (Auth::user()->can('soilNutrition.create')) {
            $cultivationTypes = CultivationType::pluck('name_en','id');
            $districts = District::all();
            $landClasses = LandClass::pluck('name_en','id');
            $landTypes = LandType::pluck('name_en','id');
            $states = State::pluck('name_en','id');
            $textures = Texture::pluck('name_en','id');
            $upazilas = Upazila::all();

    //dd($cultivationTypes);
            return view('admin.soilNutrition.create',compact('cultivationTypes','districts','landClasses','landTypes','states','textures','upazilas'));
           }
        return view('admin.unauthorized');
    }


    public function store(SoilNutritionValidation $request)
    {
        SoilNutrition::create([

            'land_type_id' =>$request->land_type_id,
            'land_Class_id' =>$request->land_Class_id,
            'texture_id' =>$request->texture_id,
            'cultivation_type_id' =>$request->cultivation_type_id,
            'district_id' =>$request->district_id,
            'upazila_id' =>$request->upazila_id,
            'pH' =>$request->pH,
            'stateOfpH_id' =>$request->stateOfpH_id,
            'organicMatter' =>$request->organicMatter,
            'stateOforganicMatter_id' =>$request->stateOforganicMatter_id,
            'calcium' =>$request->calcium,
            'stateOfcalcium_id' =>$request->stateOfcalcium_id,
            'magnesium' =>$request->magnesium,
            'stateOfmagnesium_id' =>$request->stateOfmagnesium_id,
            'potassium' =>$request->potassium,
            'stateOfpotassium_id' =>$request->stateOfpotassium_id,
            'nitrogen' =>$request->nitrogen,
            'stateOfnitrogen_id' =>$request->stateOfnitrogen_id,
            'phosphorus' =>$request->phosphorus,
            'stateOfphosphorus_id' =>$request->stateOfphosphorus_id,
            'sulfur' =>$request->sulfur,
            'stateOfsulfur_id' =>$request->stateOfsulfur_id,
            'boron' =>$request->boron,
            'stateOfboron_id' =>$request->stateOfboron_id,
            'copper' =>$request->copper,
            'stateOfcopper_id' =>$request->stateOfcopper_id,
            'ferrous' =>$request->ferrous,
            'stateOfferrous_id' =>$request->stateOfferrous_id,
            'manganese' =>$request->manganese,
            'stateOfmanganese_id' =>$request->stateOfmanganese_id,
            'zinc' =>$request->zinc,
            'stateOfzinc_id' =>$request->stateOfzinc_id
        ]);

//        dd($s);

        session()->flash('message','has been added');

        return redirect('soilNutrition');
    }


    public function show($id)
    {
        $soilNutrition = DB::table('soil_nutrition as snt')
            ->join('land_types as lt','snt.land_type_id','=','lt.id')
            ->join('land_classes as lc','snt.land_Class_id','=','lc.id')
            ->join('textures as t','snt.texture_id','=','t.id')
            ->join('cultivation_types as ct','snt.cultivation_type_id','=','ct.id')
            ->join('districts as dis','snt.district_id','=','dis.id')
            ->join('upazilas as upa','snt.upazila_id','=','upa.id')
            ->join('states as spH','snt.stateOfpH_id','=','spH.id')
            ->join('states as soM','snt.stateOforganicMatter_id','=','soM.id')
            ->join('states as sCa','snt.stateOfcalcium_id','=','sCa.id')
            ->join('states as smg','snt.stateOfmagnesium_id','=','smg.id')
            ->join('states as sK','snt.stateOfpotassium_id','=','sK.id')
            ->join('states as sN','snt.stateOfnitrogen_id','=','sN.id')
            ->join('states as sP','snt.stateOfphosphorus_id','=','sP.id')
            ->join('states as sS','snt.stateOfsulfur_id','=','sS.id')
            ->join('states as sB','snt.stateOfboron_id','=','sB.id')
            ->join('states as sCu','snt.stateOfcopper_id','=','sCu.id')
            ->join('states as sFe','snt.stateOfferrous_id','=','sFe.id')
            ->join('states as sMn','snt.stateOfmanganese_id','=','sMn.id')
            ->join('states as sZn','snt.stateOfzinc_id','=','sZn.id')


            ->select('snt.*','lt.name_en as ltN','lc.name_en as lCN','t.name_en as tN','ct.name_en as cTN','dis.name as disN','upa.name as upaN','spH.name_en as spH','soM.name_en as soM','sCa.name_en as sCa','smg.name_en as smg','sK.name_en as sK','sN.name_en as sN','sP.name_en as sP','sS.name_en as sS','sB.name_en as sB','sCu.name_en as sCu','sFe.name_en as sFe','sMn.name_en as sMn','sZn.name_en as sZn')

            ->where('snt.id','=',$id)

            ->first();

//        dd($fertilities);

        return view('admin.soilNutrition.show',compact('soilNutrition'));
    }


    public function edit($id)
    {
        if (Auth::user()->can('soilNutrition.update')) {
            $soilNutrition = DB::table('soil_nutrition as snt')
                ->join('land_types as lt','snt.land_type_id','=','lt.id')
                ->join('land_classes as lc','snt.land_Class_id','=','lc.id')
                ->join('textures as t','snt.texture_id','=','t.id')
                ->join('cultivation_types as ct','snt.cultivation_type_id','=','ct.id')
                ->join('districts as dis','snt.district_id','=','dis.id')
                ->join('upazilas as upa','snt.upazila_id','=','upa.id')
                ->join('states as spH','snt.stateOfpH_id','=','spH.id')
                ->join('states as soM','snt.stateOforganicMatter_id','=','soM.id')
                ->join('states as sCa','snt.stateOfcalcium_id','=','sCa.id')
                ->join('states as smg','snt.stateOfmagnesium_id','=','smg.id')
                ->join('states as sK','snt.stateOfpotassium_id','=','sK.id')
                ->join('states as sN','snt.stateOfnitrogen_id','=','sN.id')
                ->join('states as sP','snt.stateOfphosphorus_id','=','sP.id')
                ->join('states as sS','snt.stateOfsulfur_id','=','sS.id')
                ->join('states as sB','snt.stateOfboron_id','=','sB.id')
                ->join('states as sCu','snt.stateOfcopper_id','=','sCu.id')
                ->join('states as sFe','snt.stateOfferrous_id','=','sFe.id')
                ->join('states as sMn','snt.stateOfmanganese_id','=','sMn.id')
                ->join('states as sZn','snt.stateOfzinc_id','=','sZn.id')


                ->select('snt.*','lt.name_en as ltN','lc.name_en as lCN','t.name_en as tN','ct.name_en as cTN','dis.name as disN','upa.name as upaN','spH.name_en as spH','soM.name_en as soM','sCa.name_en as sCa','smg.name_en as smg','sK.name_en as sK','sN.name_en as sN','sP.name_en as sP','sS.name_en as sS','sB.name_en as sB','sCu.name_en as sCu','sFe.name_en as sFe','sMn.name_en as sMn','sZn.name_en as sZn')

                ->where('snt.id','=',$id)

                ->first();

            $cultivationTypes = CultivationType::pluck('name_en','id');
            $districts = District::all();
            $landClasses = LandClass::pluck('name_en','id');
            $landTypes = LandType::pluck('name_en','id');
            $states = State::pluck('name_en','id');
            $textures = Texture::pluck('name_en','id');
            $upazilas = Upazila::all();

    //        dd($fertilities);

            return view('admin.soilNutrition.edit',compact('soilNutrition','cultivationTypes','districts','landClasses','landTypes','states','textures','upazilas'));
           }
        return view('admin.unauthorized');
    }


    public function update(SoilNutritionValidation $request,$id)
    {
        $oldSoilNutrition = SoilNutrition::find($id);

        /*dd($oldSoilNutrition);*/


        OldSoilNutrition::create([

            'land_type_id' =>$oldSoilNutrition->land_type_id,
            'soil_nutrition_id' =>$oldSoilNutrition->id,
            'land_Class_id' =>$oldSoilNutrition->land_Class_id,
            'texture_id' =>$oldSoilNutrition->texture_id,
            'cultivation_type_id' =>$oldSoilNutrition->cultivation_type_id,
            'district_id' =>$oldSoilNutrition->district_id,
            'upazila_id' =>$oldSoilNutrition->upazila_id,
            'pH' =>$oldSoilNutrition->pH,
            'stateOfpH_id' =>$oldSoilNutrition->stateOfpH_id,
            'organicMatter' =>$oldSoilNutrition->organicMatter,
            'stateOforganicMatter_id' =>$oldSoilNutrition->stateOforganicMatter_id,
            'calcium' =>$oldSoilNutrition->calcium,
            'stateOfcalcium_id' =>$oldSoilNutrition->stateOfcalcium_id,
            'magnesium' =>$oldSoilNutrition->magnesium,
            'stateOfmagnesium_id' =>$oldSoilNutrition->stateOfmagnesium_id,
            'potassium' =>$oldSoilNutrition->potassium,
            'stateOfpotassium_id' =>$oldSoilNutrition->stateOfpotassium_id,
            'nitrogen' =>$oldSoilNutrition->nitrogen,
            'stateOfnitrogen_id' =>$oldSoilNutrition->stateOfnitrogen_id,
            'phosphorus' =>$oldSoilNutrition->phosphorus,
            'stateOfphosphorus_id' =>$oldSoilNutrition->stateOfphosphorus_id,
            'sulfur' =>$oldSoilNutrition->sulfur,
            'stateOfsulfur_id' =>$oldSoilNutrition->stateOfsulfur_id,
            'boron' =>$oldSoilNutrition->boron,
            'stateOfboron_id' =>$oldSoilNutrition->stateOfboron_id,
            'copper' =>$oldSoilNutrition->copper,
            'stateOfcopper_id' =>$oldSoilNutrition->stateOfcopper_id,
            'ferrous' =>$oldSoilNutrition->ferrous,
            'stateOfferrous_id' =>$oldSoilNutrition->stateOfferrous_id,
            'manganese' =>$oldSoilNutrition->manganese,
            'stateOfmanganese_id' =>$oldSoilNutrition->stateOfmanganese_id,
            'zinc' =>$oldSoilNutrition->zinc,
            'stateOfzinc_id' =>$oldSoilNutrition->stateOfzinc_id
        ]);

        $soilNutrition = SoilNutrition::find($id);

        $soilNutrition->land_type_id = $request->land_type_id;
        $soilNutrition->land_Class_id = $request->land_Class_id;
        $soilNutrition->texture_id = $request->texture_id;
        $soilNutrition->cultivation_type_id = $request->cultivation_type_id;
        $soilNutrition->district_id = $request->district_id;
        $soilNutrition->upazila_id = $request->upazila_id;


        $soilNutrition->pH = $request->pH;
        $soilNutrition->stateOfpH_id = $request->stateOfpH_id;
        $soilNutrition->organicMatter = $request->organicMatter;
        $soilNutrition->stateOforganicMatter_id = $request->stateOforganicMatter_id;
        $soilNutrition->calcium = $request->calcium;
        $soilNutrition->stateOfcalcium_id = $request->stateOfcalcium_id;
        $soilNutrition->magnesium = $request->magnesium;
        $soilNutrition->stateOfmagnesium_id = $request->stateOfmagnesium_id;
        $soilNutrition->potassium = $request->potassium;
        $soilNutrition->stateOfpotassium_id = $request->stateOfpotassium_id;

        $soilNutrition->nitrogen = $request->nitrogen;
        $soilNutrition->stateOfnitrogen_id = $request->stateOfnitrogen_id;
        $soilNutrition->phosphorus = $request->phosphorus;
        $soilNutrition->stateOfphosphorus_id = $request->stateOfphosphorus_id;
        $soilNutrition->sulfur = $request->sulfur;
        $soilNutrition->stateOfsulfur_id = $request->stateOfsulfur_id;
        $soilNutrition->boron = $request->boron;
        $soilNutrition->stateOfboron_id = $request->stateOfboron_id;
        $soilNutrition->copper = $request->copper;
        $soilNutrition->stateOfcopper_id = $request->stateOfcopper_id;
        $soilNutrition->ferrous = $request->ferrous;
        $soilNutrition->stateOfferrous_id = $request->stateOfferrous_id;
        $soilNutrition->manganese = $request->manganese;
        $soilNutrition->stateOfmanganese_id = $request->stateOfmanganese_id;
        $soilNutrition->zinc = $request->zinc;
        $soilNutrition->stateOfzinc_id = $request->stateOfzinc_id;

        $soilNutrition->save();

        session()->flash('message','has been updated');

        return redirect('soilNutrition');



    }


    public function destroy($id)
    {
        if (Auth::user()->can('soilNutrition.delete')) {
            $soilNutrition = SoilNutrition::find($id);
            $soilNutrition->delete();

            session()->flash('message','has been deleted');
            return redirect('soilNutrition');
            }
        return view('admin.unauthorized');
    }
}
