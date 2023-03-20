<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Validator;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('categories.view',compact('categories'));

    }


    public function newCat(){
        return view('categories.add');
    }

    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $category = Category::create($input);
        // return redirect()->back()->with('message', 'Added Successfully');
        return redirect('/category');

    }

    public function edit($id){
        $category = Category::findorFail($id);
        return view('categories.edit', compact('category'));
        // dd($id);
    }

    public function delete($id){


        $category = Category::findorFail($id);
        $category->delete();
        return redirect('/category');
    }

    public function update(Request $request){

        $category = Category::findorFail($request->id);
        $category->name = $request->name;
        $category->update();
        return redirect('/category');
    }

}
