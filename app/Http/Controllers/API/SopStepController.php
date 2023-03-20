<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Sop_step;
use Validator;

class SopStepController extends Controller
{
    // function __invoke() {
    //     return 'Testing';
    // }

public function add(Request $request){
    $input = $request->all();
    $validator = Validator::make($input, [
        'title' => 'required',
        'text' => 'required',
        'sop_id' => 'required',
        'priority' => 'required'
    ]);

    if ($validator->fails()) {
        return sendCustomResponse($validator->messages()->first(), 'error', 500);
    }


    $image_path = $request->file('image')->store('image', 'public');
    $data = Sop_step::create([
        'title' => $request->title,
        'text' => $request->text,
        'sop_id' => $request->sop_id,
        'priority' => $request->priority,
        'image' => $image_path,

    ]);
    return response($data, Response::HTTP_CREATED);

}

public function view(){

    dd("kjaskl");
   $Sop = Sop_step::where('id',$id)->get();
   return response($Sop);

}

}
