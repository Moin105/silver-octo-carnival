<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Models\Type;
class TypeController extends Controller
{
    //

    function __invoke() {
        return 'Testing';
    }
    public function index(){

        $type = Type::all();
        return $this->sendResponse($type);
    }

    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'message' => 'Validation Error.',
                'data' => $validator->errors()
            ], 422);
        }

        $input = $request->all();
        $type = Type::create($input);
        return response()->json([
            'message' => 'Type added successfully.',
            'data' => $type,
        ], 200);

    }

    // public function categories(){
    //    $categories =  Category::all();
    //    return $this->sendResponse($categories);
    // }

    public function categories(){
        $categories =  Category::all();
        return response()->json([
             'success' => true,
             'message' => 'Categories retrieved successfully.',
             'data' => $categories
         ], 200);
     }

     public function add_category(Request $request){
         $validator = Validator::make($request->all(), [
             'name' => 'required',
         ]);
         if($validator->fails()){
             return response()->json([
                 'success' => false,
                 'message' => 'Validation Error.',
                 'data' => $validator->errors()
             ], 422);
         }

         $input = $request->all();
         $category = Category::create($input);
         return response()->json([
             'success' => true,
             'message' => 'Category added successfully.',
             'data' => $category
         ], 200);
     }
}
