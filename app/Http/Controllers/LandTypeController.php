<?php

namespace App\Http\Controllers;

use App\LandType;
use Illuminate\Http\Request;
use App\Http\Requests\LandTypeValidation;
use Illuminate\Support\Facades\Auth;

class LandTypeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->can('landTypeList')) {
            $landTypes = LandType::all();

            return view('admin.landType.list',compact('landTypes'));
            }
        return view('admin.unauthorized');
    }


    public function create()
    {
        if (Auth::user()->can('landType.create')) {
            return view('admin.landType.create');
        }
        return view('admin.unauthorized');
    }


    public function store(LandTypeValidation $request)
    {
        LandType::create([
            'name_bn'=> $request->name_bn,
            'name_en'=> $request->name_en,
        ]);

        session()->flash('message','has been added');

        return redirect('landType');
    }


    public function show($id)
    {
        $landType = LandType::find($id);

        return view('admin.landType.show',compact('landType'));
    }


    public function edit($id)
    {
        if (Auth::user()->can('landType.update')) {
            $landType = LandType::find($id);

            return view('admin.landType.edit',compact('landType'));
            }
        return view('admin.unauthorized');
    }


    public function update(LandTypeValidation $request, $id)
    {
        $landType = LandType::find($id);
        $landType->name_bn = $request->name_bn;
        $landType->name_en = $request->name_en;
        $landType->save();

        session()->flash('message','has been edited');

        return redirect('landType');
    }


    public function destroy($id)
    {
          if (Auth::user()->can('landType.delete')) {
            $landType = LandType::find($id);
            $landType->delete();

            session()->flash('message','has been deleted');

            return redirect('landType');
            }
        return view('admin.unauthorized');
    }
}
