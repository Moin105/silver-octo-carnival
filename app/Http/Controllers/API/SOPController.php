<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SOP;
class SOPController extends BaseController
{
    // function __invoke() {
    //     return 'Testing';
    // }
    public function index()
    {

        dd("jjj");
        $SOPs = SOP::all();

        return $this->sendResponse(($SOPs), 'SOPs retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'type' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $SOP = SOP::create($input);

        // return $this->sendResponse(new SOPResource($SOP), 'SOP created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()


    {

        dd('here');
        return;
        $SOP = SOP::find($id);

        if (is_null($SOP)) {
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
    public function destroy(SOP $SOP)
    {
        $SOP->delete();
        Sop_step::where('sop_id',$SOP)->delete();

        return $this->sendResponse([], 'SOP deleted successfully.');
    }
}
