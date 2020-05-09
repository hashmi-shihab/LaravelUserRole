<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->can('rolesList')) {
            $roles = Role::all();
            return view('admin.roles.list',compact('roles'));
            }
        return view('admin.unauthorized');
    }


    public function create()
    {
        if (Auth::user()->can('roles.create')) {
            $permissions = Permission::all()->groupBy('for')->toArray();
    //        dd($permissions) ;

            return view('admin.roles.create',compact('permissions'));
            }
        return view('admin.unauthorized');
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



        $role = new Role;
        $role->name = $request->name;
        $role->save();
        $role->permissions()->sync($request->permission);


        session()->flash('message','has been added');
        return redirect('roles');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        if (Auth::user()->can('roles.update')) {
            $role = Role::find($id);
            $permissions = Permission::all()->groupBy('for')->toArray();

            return view('admin.roles.edit',compact('role','permissions'));
            }
        return view('admin.unauthorized');
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
        $role->permissions()->sync($request->permission);

        session()->flash('message','has been updated');
        return redirect('roles');
    }

    public function destroy(Request $request,$id)
    {
         if (Auth::user()->can('roles.delete')) {
            DB::table('permission_role')->where('role_id',$id)->delete();
            /*Permission::where('role_id',$id)->delete();*/
            Role::find($id)->delete();

            session()->flash('message','has been deleted');
            return redirect('roles');
          }
        return view('admin.unauthorized');
    }
}
