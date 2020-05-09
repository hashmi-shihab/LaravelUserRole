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

        $data = User::orderBy('id','DESC')->get();

        return view('admin.users.list',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }



    public function create()
    {
        $roles = Role::pluck('name','id')->all();
//dd($roles);
        return view('admin.users.create',compact('roles'));
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

        if ($request->user_type == '1') {
            $rules = [
                'branch_id' => 'required',
                'unit_id' => 'required',
                'dept_id' => 'required',
                'speciality' => 'required',
                'id_type' => 'required|numeric',
                'birth_date' => 'required|date',
                'contact_no' => 'required',
                'new_fee' => 'required|numeric',
                'old_fee' => 'required|numeric',
                'designation' => 'required',
                'certification' => 'required',
                'image' => 'required|image|mimes:jpeg,PNG,png,jpg,gif,svg|max:2048',
                'publish' => 'required|numeric',
            ];
            $customMessages = [
                'new_fee.required' => 'New patient fee field is required',
                'old_fee.required' => 'Old patient fee field is required',
                'branch_id.required' => 'Branch field is required',
                'dept_id.required' => 'Department field is required',
                'unit_id.required' => 'Unit field is required',
                'certification.required' => 'Certification field is required',
                'designation.required' => 'Designation field is required',
                'speciality.required' => 'Speciality field is required',
                'birth_date.required' => 'Birth date field is required',
                'id_type.required' => 'Id type field is required',
                'publish.required' => 'Publish field is required',
                'image.required' => 'Image field is required',
            ];
            $this->validate($request, $rules, $customMessages);


            if ($request->id_type == "1"){
                $rules = [
                    'nid'=> 'required|numeric',
                ];
                $customMessages = [
                    'nid.required' => 'NID field is required',
                ];
                $this->validate($request, $rules, $customMessages);
            }
            else{
                $rules = [
                    'bc' => 'required|numeric',
                ];
                $customMessages = [
                    'bc.required' => 'Birth Certificate field is required',
                ];
                $this->validate($request, $rules, $customMessages);
            }
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);


        User::create($input);

        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }



    public function show($id)
    {
        $user = User::find($id);

    }



    public function edit($id)
    {

        $user = User::find($id);
        $roles= Role::all();

        return view('admin.users.edit',compact('user','roles'));
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

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = array_except($input,array('password'));
        }


        $user = User::find($id);
        $user->update($input);


        return redirect()->route('users.index')
            ->with('success','User updated successfully');


    }



    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }

}
