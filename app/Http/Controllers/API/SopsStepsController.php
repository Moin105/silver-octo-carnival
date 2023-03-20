<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Sop_step;
use App\Models\User;


class SopsStepsController extends Controller
{
    //


public function add(Request $request){

        // title','text','image','youtube','list','priority','sop_id'

        $input = $request->all();
        $userId = Auth::id();
        // $validator = Validator::make($input, [
        //     'title' => 'required',
        //     'sop_id' => 'required',
        //     'priority' => 'required',

        //     'text' => 'required',
        //     'image' => 'required',
        //     'youtube' => 'required',
        //     'list' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'message' => 'Validation Error.',
        //         'data' => $validator->errors()
        //     ], 422);
        // }

        $image_path = null;
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('image', 'public');
        }

        $data = Sop_step::create([
            'title' => $request->title,
            'text' => $request->text,
            'sop_id' => $request->sop_id,
            'priority' => $request->priority,
            'image' => $image_path,
            'youtube' => $request->youtube,
            'list' => $request->list,
        ]);

        return response()->json([
            'message' => 'Sop_step created successfully.',
            'data' => $data,
        ], 200);
}

public function view(){


   $Sop = Sop_step::where('id',$id)->get();
   return response($Sop, Response::HTTP_OK);
//    return 'Retrived SOP Steps';

}
}
