<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\SOP;
use App\Models\Sop_step;
use Intervention\Image\ImageManagerStatic as Image;

class SopsController extends Controller
{

    function __invoke()
    {
        return 'Testing';
    }

    public function index()

    {
        $userId = Auth::id();
        $SOP_Steps = SOP::with('steps')->with('category')->with('type')->where('user_id','=',$userId)->get();
        $SOPs_Data = $SOP_Steps;


        $response = response()->json($SOPs_Data);
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function add(Request $request)
     {


        $sops = $request->all();
        $userId = Auth::id();

        $validator = Validator::make($sops, [
            'type_id' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'steps' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => 'Validation Error.',
                'data' => $validator->errors()
            ];

        }

        $data = SOP::create([
            'user_id' => $userId,
            'title' => $sops['title'],
            'type_id' => $sops['type_id'],
            'category_id' => $sops['category_id'],
            'description' => $sops['description'],

        ]);

        $latestSop = SOP::latest()->first();

        foreach ($sops['steps'] as $step){


            $sop_step = new Sop_step();

            if($step['image'] != '' ){
            $imageFile = $step['image'];
            // Generate a unique filename for the image
            $filename = uniqid() . '.' . $imageFile->getClientOriginalExtension();
            // Store the image in the storage directory
            $path = $imageFile->storeAs('public/images', $filename);
            // Get the URL from the request
            $url = $filename;
            $sop_step->image = $url;
        }



            $sop_step->sop_id = $latestSop->id;
            $sop_step->title= $step['title'];
            $sop_step->priority = $step['priority'];
            $sop_step->text = $step['text'];
            $sop_step->youtube = $step['youtube'];
            $sop_step->list = $step['list'];

            $sop_step->save();
        }
        return response()->json([
            'message' => 'Sop_step created successfully.',
            'sop' => $data,
            'sop_step' => $sop_step
        ], 200);
    }


    // public function add(Request $request)
    // {
    //     $userId = Auth::id();
    //     $validator = Validator::make($request->all(), [
    //         'type_id' => 'required',
    //         'title' => 'required',
    //         'category_id' => 'required',
    //         'description' => 'required',
    //         // 'steps' => 'required',
    //     ]);

    //     if ($validator->fails())
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Validation Error.',
    //             'data' => $validator->errors()
    //         ], 422);
    //     }

    //     $sop = new SOP;
    //     $sop->user_id = $userId;
    //     $sop->title = $request->title;
    //     $sop->type_id = $request->type_id;
    //     $sop->category_id = $request->category_id;
    //     $sop->description = $request->description;
    //     $sop->steps = $request->steps;
    //     $sop->save();
    //     $steps = $request->input('steps');


    //     if($request->hasFile('image')){
    //         $images = $request->file('image');
    //         foreach ($images as $image) {
    //             $filenameWithExt = $image->getClientOriginalName();
    //             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //             $extension = $image->getClientOriginalExtension();
    //             $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //             $path = $image->storeAs('public/images', $fileNameToStore);
    //             $imageArray[] = $fileNameToStore;
    //         }
        // }

        // foreach ($steps as $step)
        // {
        //     if (isset($step['image']) && !empty($step['image']))
        //     {
        //         $filename = $step['title'] . '_' . time() . '.' . $step['image']->getClientOriginalExtension();
        //         $step['image']->storeAs('public/images', $filename);
        //         $step['image'] = $filename;
        //     }

            // $sop_step = new Sop_step($step);
            // $sop_step->sop_id = $sop->id;
            // $sop_step->save();
        // }

    //     return response()->json([
    //         'message' => 'SOP created successfully.',
    //         'data' => $sop,
    //     ], 201);
    // }




    public function store(Request $request)
    {
        $userId = Auth::id();
        $input = $request->all();

        $validator = Validator::make($input, [
            'type_id' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'steps' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => 'Validation Error.',
                'data' => $validator->errors()
            ];
            return response()->json($response, 422);
        }


        $input['user_id'] = $userId;

        $SOP = SOP::create($input);



        $response = [
            'success' => true,
            'message' => 'SOP created successfully.',
            'data' => $SOP,
        ];

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()


    {

        // return ('SOP retrieved successfully.');
        // return;
        $SOP = SOP::find($id);

        if (is_null($SOP))
        {
            return $this->sendError('SOP not found.');
        }

        return $this->sendResponse(new SOPResource($SOP), 'SOP retrieved successfully.');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SOP $SOP)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $SOP->name = $input['title'];
        $SOP->detail = $input['description'];
        $SOP->save();

        return $this->sendResponse(new SOPResource($SOP), 'SOP updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($SOP)
    {

        $sop = SOP::where('id',$SOP)->first();
        $sop->delete();
       $sop_step =  Sop_step::where('sop_id',$SOP)->get();
       foreach($sop_step as $step){
              $step->delete();
       }



        return response()->json([
            'message' => 'SOP deleted successfully.',
            'data' => $SOP,
        ], 201);
    }

    //
}
