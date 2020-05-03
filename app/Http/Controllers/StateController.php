<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;
use App\Http\Requests\StateValidation;

class StateController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $states= State::all();

        return view('admin.state.list',compact('states'));
    }


    public function create()
    {
        return view('admin.state.create');
    }


    public function store(StateValidation $request)
    {
        State::create([
            'name_bn'=> $request->name_bn,
            'name_en'=>$request->name_en,
        ]);

        session()->flash('message','has been added');

        return redirect('state');
    }


    public function show($id)
    {
        $state = State::find($id);
//        dd($state);
        return view('admin.state.show',compact('state'));
    }


    public function edit($id)
    {
        $state=State::find($id);
        return view('admin.state.edit',compact('state'));
    }


    public function update(StateValidation $request, $id)
    {
        $state=State::find($id);
        $state->name_bn = $request->name_bn;
        $state->name_en = $request->name_en;
        $state->save();

        session()->flash('message','has been updated');
        return redirect('state');
    }


    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();

        return redirect('state');
    }
}
