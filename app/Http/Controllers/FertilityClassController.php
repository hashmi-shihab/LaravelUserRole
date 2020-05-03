<?php

namespace App\Http\Controllers;

use App\FertilityClass;
use App\Texture;
use Illuminate\Http\Request;
use App\Http\Requests\FertilityClassValidation;
use App\LandType;
use App\LandClass;
use App\CultivationType;
use App\State;
use App\District;
use App\Upazila;
use Illuminate\Support\Facades\DB;

class FertilityClassController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {


        $fertilities = DB::table('fertility_classes as fc')
            ->join('land_types as lt','fc.land_type_id','=','lt.id')
            ->join('land_classes as lc','fc.land_Class_id','=','lc.id')
            ->join('textures as t','fc.texture_id','=','t.id')
            ->join('cultivation_types as ct','fc.cultivation_type_id','=','ct.id')
            ->join('districts as dis','fc.district_id','=','dis.id')
            ->join('upazilas as upa','fc.upazila_id','=','upa.id')
            ->join('states as spH','fc.stateOfpH_id','=','spH.id')
            ->join('states as soM','fc.stateOforganicMatter_id','=','soM.id')
            ->join('states as sCa','fc.stateOfcalcium_id','=','sCa.id')
            ->join('states as smg','fc.stateOfmagnesium_id','=','smg.id')
            ->join('states as sK','fc.stateOfpotassium_id','=','sK.id')
            ->join('states as sN','fc.stateOfnitrogen_id','=','sN.id')
            ->join('states as sP','fc.stateOfphosphorus_id','=','sP.id')
            ->join('states as sS','fc.stateOfsulfur_id','=','sS.id')
            ->join('states as sB','fc.stateOfboron_id','=','sB.id')
            ->join('states as sCu','fc.stateOfcopper_id','=','sCu.id')
            ->join('states as sFe','fc.stateOfferrous_id','=','sFe.id')
            ->join('states as sMn','fc.stateOfmanganese_id','=','sMn.id')
            ->join('states as sZn','fc.stateOfzinc_id','=','sZn.id')


            ->select('fc.*','lt.name_en as ltN','lc.name_en as lCN','t.name_en as tN','ct.name_en as cTN','dis.name as disN','upa.name as upaN','spH.name_en as spH','soM.name_en as soM','sCa.name_en as sCa','smg.name_en as smg','sK.name_en as sK','sN.name_en as sN','sP.name_en as sP','sS.name_en as sS','sB.name_en as sB','sCu.name_en as sCu','sFe.name_en as sFe','sMn.name_en as sMn','sZn.name_en as sZn')

            ->get();

//        dd($fertilities);

        return view('admin.fertilityClass.list',compact('fertilities'));
    }


    public function create()
    {
        $cultivationTypes = CultivationType::pluck('name_en','id');
        $districts = District::all();
        $landClasses = LandClass::pluck('name_en','id');
        $landTypes = LandType::pluck('name_en','id');
        $states = State::pluck('name_en','id');
        $textures = Texture::pluck('name_en','id');
        $upazilas = Upazila::all();

//dd($cultivationTypes);
        return view('admin.fertilityClass.create',compact('cultivationTypes','districts','landClasses','landTypes','states','textures','upazilas'));
    }


    public function store(FertilityClassValidation $request)
    {
        $s=FertilityClass::create([

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

        return redirect('fertilityClass');
    }


    public function show($id)
    {
        $fertility = DB::table('fertility_classes as fc')
            ->join('land_types as lt','fc.land_type_id','=','lt.id')
            ->join('land_classes as lc','fc.land_Class_id','=','lc.id')
            ->join('textures as t','fc.texture_id','=','t.id')
            ->join('cultivation_types as ct','fc.cultivation_type_id','=','ct.id')
            ->join('districts as dis','fc.district_id','=','dis.id')
            ->join('upazilas as upa','fc.upazila_id','=','upa.id')
            ->join('states as spH','fc.stateOfpH_id','=','spH.id')
            ->join('states as soM','fc.stateOforganicMatter_id','=','soM.id')
            ->join('states as sCa','fc.stateOfcalcium_id','=','sCa.id')
            ->join('states as smg','fc.stateOfmagnesium_id','=','smg.id')
            ->join('states as sK','fc.stateOfpotassium_id','=','sK.id')
            ->join('states as sN','fc.stateOfnitrogen_id','=','sN.id')
            ->join('states as sP','fc.stateOfphosphorus_id','=','sP.id')
            ->join('states as sS','fc.stateOfsulfur_id','=','sS.id')
            ->join('states as sB','fc.stateOfboron_id','=','sB.id')
            ->join('states as sCu','fc.stateOfcopper_id','=','sCu.id')
            ->join('states as sFe','fc.stateOfferrous_id','=','sFe.id')
            ->join('states as sMn','fc.stateOfmanganese_id','=','sMn.id')
            ->join('states as sZn','fc.stateOfzinc_id','=','sZn.id')


            ->select('fc.*','lt.name_en as ltN','lc.name_en as lCN','t.name_en as tN','ct.name_en as cTN','dis.name as disN','upa.name as upaN','spH.name_en as spH','soM.name_en as soM','sCa.name_en as sCa','smg.name_en as smg','sK.name_en as sK','sN.name_en as sN','sP.name_en as sP','sS.name_en as sS','sB.name_en as sB','sCu.name_en as sCu','sFe.name_en as sFe','sMn.name_en as sMn','sZn.name_en as sZn')

            ->where('fc.id','=',$id)

            ->first();

//        dd($id);

        return view('admin.fertilityClass.show',compact('fertility'));
    }


    public function edit($id)
    {
        //
    }


    public function update(FertilityClassValidation $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $fertility = FertilityClass::find($id);

        $fertility->delete();

        session()->flash('message','has been deleted');
        return redirect('fertilityClass');

    }
}
