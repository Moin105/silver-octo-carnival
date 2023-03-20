<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

        $Users = User::get()->all();
        return view('users.view',compact('Users'));

    }

    public function newUser()
    {
        return view('users.add');
    }

    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'sur_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'company' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['message' => 'Validation Error.', 'errors' => $validator->errors()], 422);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        // return response()->json(['message' => 'User created successfully.'], 200);
        return redirect('/user');

    }

    public function edit($id){
        $Users = User::findorFail($id);
        return view('users.edit', compact('Users'));
        // dd($id);
    }

    public function delete($id){


        $Users = User::findorFail($id);
        $Users->delete();
        return redirect('/user');
    }

    public function update(Request $request){
        $Users = User::findorFail($request->id);
        $Users->first_name = $request->first_name;
        $Users->sur_name = $request->sur_name;
        $Users->email = $request->email;
        $Users->password = $request->password;
        $Users->company = $request->company;
        $Users->save();
        return redirect('/user');
    }
}
