<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.list',compact('roles'));
    }


    public function create()
    {
        return view('admin.roles.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:roles,name',
            'permission.*' => 'required',
        ];


        $customMessages = [
            'name.required'=>'Role name is required',
            'permission.*.required'=>'Please select role\'s permission',
        ];
        $this->validate($request, $rules, $customMessages);

        $role = Role::create([
            'name' => $request->name,
        ]);

        foreach ($request->permission as $singlePermission)
        {
            Permission::create([
                'permission' => $singlePermission,
                'roles_id' => $role->id,
            ]);
        }

        session()->flash('message','has been added');
        return redirect('roles');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::where('roles_id',$id)->pluck('permission')->toArray();

        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Request $request,$id)
    {
        $rules = [
            'name' => 'required|unique:roles,name,' .$id,
            'permission.*' => 'required',
        ];


        $customMessages = [
            'name.required'=>'Role name is required',
            'permission.*.required'=>'Please select role\'s permission',
        ];
        $this->validate($request, $rules, $customMessages);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        Permission::where('roles_id',$id)->delete();

        foreach ($request->permission as $singlePermission)
        {
            Permission::create([
                'permission' => $singlePermission,
                'roles_id' => $role->id,
            ]);
        }

        session()->flash('message','has been updated');
        return redirect('roles');
    }

    public function destroy(Request $request,$id)
    {
        Permission::where('roles_id',$id)->delete();
        Role::find($id)->delete();

        session()->flash('message','has been deleted');
        return redirect('roles');
    }
}
