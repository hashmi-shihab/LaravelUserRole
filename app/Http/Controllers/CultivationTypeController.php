<?php

namespace App\Http\Controllers;

use App\CultivationType;
use Illuminate\Http\Request;
use App\Http\Requests\CultivationTypeValidation;
use Illuminate\Support\Facades\Auth;

class CultivationTypeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->can('cultivationTypeList')) {
            $cultivationTypes = CultivationType::all();

            return view('admin.cultivationType.list',compact('cultivationTypes'));
           }
        return view('admin.unauthorized');
    }


    public function create()
    {
        if (Auth::user()->can('cultivationType.create')) {
            return view('admin.cultivationType.create');
            }
        return view('admin.unauthorized');
    }


    public function store(CultivationTypeValidation $request)
    {
        CultivationType::create([

            'name_bn'=>$request->name_bn,
            'name_en'=>$request->name_en,
        ]);

        session()->flash('message','has been updated');

        return redirect('cultivationType');
    }


    public function show($id)
    {
        $cultivationType = CultivationType::find($id);

        return view('admin.cultivationType.show',compact('cultivationType'));
    }


    public function edit($id)
    {
        if (Auth::user()->can('cultivationType.update')) {
            $cultivationType = CultivationType::find($id);

            return view('admin.cultivationType.edit',compact('cultivationType'));
            }
        return view('admin.unauthorized');
    }


    public function update(CultivationTypeValidation $request, $id)
    {
        $cultivationType = CultivationType::find($id);
        $cultivationType->name_bn = $request->name_bn;
        $cultivationType->name_en = $request->name_en;
        $cultivationType->save();

        session()->flash('message','has been updated');

        return redirect('cultivationType');

    }


    public function destroy($id)
    {
        if (Auth::user()->can('cultivationType.delete')) {
            $cultivationType = CultivationType::find($id);
            $cultivationType->delete();

            session()->flash('message','has been delete');

            return redirect('cultivationType');
            }
        return view('admin.unauthorized');

    }
}
