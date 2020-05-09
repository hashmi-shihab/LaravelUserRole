<?php

namespace App\Http\Controllers;

use App\LandClass;
use Illuminate\Http\Request;
use App\Http\Requests\LandClassValidation;
use Illuminate\Support\Facades\Auth;


class LandClassController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index()
    {
        if (Auth::user()->can('landClassList')) {
            $landClasses = LandClass::all();

            /*dd($landClasses);*/
            return view('admin.landClass.list', compact('landClasses'));
        }
        return view('admin.unauthorized');

    }


    public function create()
    {
        if (Auth::user()->can('landClass.create')) {
            return view('admin.landClass.create');
        }
        return view('admin.unauthorized');

    }


    public function store(LandClassValidation $request)
    {
        /*dd($request->name_bn);*/


        /*$request->validate([
            'name_bn' => 'required',
            'name_en' => 'required',],
        [
            'name_bn.required'=>'Land class name Bangla is required ',
            'name_en.required'=>'Land class name English is required ',
            ]);*/



        /*dd($request->all());*/


        LandClass::create([

            'name_bn'=> $request->name_bn,
            'name_en'=> $request->name_en,

        ]);


        session()->flash('message','has been created');

        return redirect('landClass');
    }


    public function show($id)
    {
        $landClass = LandClass::find($id);
//        dd($landClass);
        return view('admin.landClass.show',compact('landClass'));
    }


    public function edit($id)
    {
        if (Auth::user()->can('landClass.update')) {
            $landClass = LandClass::find($id);

    //        dd($landClass);

            return view('admin.landClass.edit',compact('landClass'));
         }
        return view('admin.unauthorized');
    }


    public function update(LandClassValidation $request,$id)
    {
        $landClass = LandClass::find($id);

        $landClass->name_bn = $request->get('name_bn');
        $landClass->name_en = $request->get('name_en');

        $landClass->save();

        session()->flash('message','has been updated');

        return redirect('landClass');


    }


    public function destroy($id)
    {
        if (Auth::user()->can('landClass.delete')) {
            /*dd($id);*/
            $landClass = LandClass::find($id);
            //dd($landClass);
            $landClass->delete();

            session()->flash('message','has been deleted');

            return redirect('landClass');
          }
        return view('admin.unauthorized');
    }
}
