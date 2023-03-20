<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{

    public function index(){


        $types = Type::all();

        return view('Types.view',compact('types'));

    }

    public function add(){

        return view('Types.add');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $types = Type::create($input);
        // return redirect()->back()->with('message', 'Added Successfully');
        return redirect('/type');

    }

    public function delete($id){


        $types = Type::findorFail($id);
        $types->delete();
        return redirect('/type');
    }


    public function edit($id){

        $type = Type::findorFail($id);

        return view('Types.edit',compact('type'));

    }
    public function update(Request $request){
        $types = Type::findorFail($request->id);
        $types->title = $request->title;
        $types->detail = $request->detail;
        $types->save();
        return redirect('/type');

    }



}
