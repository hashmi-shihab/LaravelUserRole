<?php

namespace App\Http\Controllers;


use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;
use Hash;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        if (Auth::user()->can('usersList')) {
            $data = User::orderBy('id','DESC')->get();

            return view('admin.users.list',compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
        }
        return view('admin.unauthorized');

    }



    public function create()
    {
        if (Auth::user()->can('users.create')) {
            $roles = Role::pluck('name','id')->all();
            //dd($roles);
            return view('admin.users.create',compact('roles'));
        }
        return view('admin.unauthorized');
    }



    public function store(Request $request)
    {
//        dd($request->all());

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password|min:3',
            'roles_id' => 'required',
        ];


        $customMessages = [
            'name.required' => 'Name field is required',
            'roles_id.required' => 'Roles field is required',
        ];
        $this->validate($request, $rules, $customMessages);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);
        $user->roles()->sync($request->roles_id);


        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }



    public function show($id)
    {
        $user = User::find($id);

    }



    public function edit($id)
    {
        if (Auth::user()->can('users.update')) {
            $user = User::find($id);
            $roles = Role::pluck('name','id')->all();
            $userRole = $user->roles->pluck('id')->all();
    //        dd($userRole);

            return view('admin.users.edit',compact('user','roles','userRole'));
           }
        return view('admin.unauthorized');
    }



    public function update(Request $request, $id)
    {

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles_id' => 'required',
        ];


        $customMessages = [
            'name.required' => 'Name field is required',
            'roles_id.required' => 'Roles field is required',
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->password){

            $rules = [
                'password'=> 'same:confirm-password|min:3',
            ];
            $this->validate($request, $rules);
        }

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = array_except($input,array('password'));
        }


        $user = User::find($id);
        $user->update($input);

        User::find($id)->roles()->sync($request->roles_id);

        return redirect()->route('users.index')
            ->with('success','User updated successfully');


    }



    public function destroy($id)
    {
        if (Auth::user()->can('users.delete')) {
            DB::table('role_user')->where('user_id',$id)->delete();
            $user = User::find($id);
            $user->delete();
            return redirect()->route('users.index')->with('success','User deleted successfully');
            }
        return view('admin.unauthorized');
    }

}
