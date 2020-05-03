<?php

namespace App\Http\Controllers;

use App\Texture;
use Illuminate\Http\Request;
use App\Http\Requests\TextureValidation;

class TextureController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $textures = Texture::all();

        return view('admin.texture.list',compact('textures'));
    }


    public function create()
    {
        return view('admin.texture.create');
    }


    public function store(TextureValidation $request)
    {
        Texture::create([

            'name_bn'=>$request->name_bn,
            'name_en'=>$request->name_en,
        ]);

        session()->flash('message','has been updated');

        return redirect('texture');
    }


    public function show($id)
    {
        $texture = Texture::find($id);

        return view('admin.texture.show',compact('texture'));
    }


    public function edit($id)
    {
        $texture = Texture::find($id);

        return view('admin.texture.edit',compact('texture'));
    }


    public function update(TextureValidation $request, $id)
    {
        $texture = Texture::find($id);
        $texture->name_bn = $request->name_bn;
        $texture->name_en = $request->name_en;
        $texture->save();
        session()->flash('message','has been updated');

        return redirect('texture');
    }


    public function destroy($id)
    {
        $texture = Texture::find($id);
        $texture->delete();
        session()->flash('message','has been deleted');

        return redirect('texture');
    }
}
