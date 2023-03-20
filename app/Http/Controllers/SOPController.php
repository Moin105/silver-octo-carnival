<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\SOP;
use App\Models\User;
use App\Models\Sop_Step;

class SOPController extends Controller
{
    public function index()
    {
        $userID = Auth::user()->id;
        // Retrieve all SOPs from the database
        // $sops = SOP::with('user')->get();
        // $sopID = SOP::with('SOPid')->get();
        // $sopsCount = $sops->count();
        $sops = SOP::withCount('steps')->get();

        // $steps = Sop_Step::with('sop')->where('sop_id', $sopID)->get();



        // Return a view to display the SOPs
        return view('sops.index', ['sops' => $sops, ]);
    }

    public function create()
    {
        // Return a view to display the create SOP form
        return view('sops.create');
    }

    public function store(Request $request)
    {
        // Validate the form input

        $validatedData = Validator::make(request->all(),[
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if($validatedData->fails())
        {
            return response()->json(
                [
                    'message' => 'Validation Error.',
                    'errors' => $validator->errors()
                ], 422);
        }

        // Create a new SOP with the validated data
        $sop = SOP::create($validatedData);

        // Redirect to the index page with a success message
        return redirect('/sop');
    }

    public function newSOP()
    {
        // Return a view to display the create SOP form
        return view('sops.add');
    }

    public function show($id)
    {
        // Retrieve the SOP with the specified ID from the database
        $sop = SOP::findOrFail($id);

        // Return a view to display the SOP
        return view('sops.show', ['sop' => $sop]);
    }

    public function edit($id)
    {
        // Retrieve the SOP with the specified ID from the database
        $sop = SOP::findOrFail($id);

        // Return a view to display the edit SOP form
        return view('sops.edit',compact('sop'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        // Retrieve the SOP with the specified ID from the database
        $sop = SOP::findOrFail($request->id);
        $sop->title = $request->title;
        $sop->description = $request->description;
        $sop->save();
        return redirect('/sop');
    }

    public function destroy($id)
    {
        // Retrieve the SOP with the specified ID from the database
        $sop = SOP::findOrFail($id);

        // Delete the SOP
        $sop->delete();

        // Redirect to the index page with a success message
        return redirect('/sop');
    }
}







