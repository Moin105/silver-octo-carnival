<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Type;
use App\Models\Category;


class TypesController extends Controller
{
    //

    function __invoke() {
        return 'Testing';
    }
    public function index(){


        $type = Type::all();
        return Response($type);
// return  Response("TESTING");

    }

    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'detail' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 400);
        }

        $input = $request->all();
        $type = Type::create($input);
        return response()->json(['message' => 'Type added successfully.','title'=>$type->title,'detail'=>$type->detail], 200);
    }


    public function categories(){
       $categories =  Category::all();
       return Response($categories);
    //    return 'Categories retrieved successfully.';
    }

    public function add_category(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 400);
        }

        $input = $request->all();
        $category = Category::create($input);
        return response()->json(['message' => 'Category added successfully.','name'=>$category->name], 200);
     }
}
