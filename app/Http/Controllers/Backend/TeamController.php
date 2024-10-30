<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('backend.team.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        Log::info($request->all());
        $data = [
            'name' => $request->name ?? Null,
            'designation' => $request->designation ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $team =  Team::create($data);

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image'); // Retrieve the file from the request
            $team->addMedia($file)->toMediaCollection('profileImage'); // Add image to media collection
        }

        return response()->json(['success' => 'Team User created successfully!', 'redirect_to' => route('team.index'), 'data' =>  $request->all()]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::where('id', $id)->first();
        $profileImage = $team->getMedia('ProfileImage');

        // return $project;
        return view('backend.team.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        Log::info('update team!');
        Log::info($request->all());
        $data = [
            'name' => $request->name ?? Null,
            'designation' => $request->designation ?? Null,
        ];


        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $team = Team::where('id', $id)->first();

        if ($request->hasFile('profile_image')) {

            if ($team->hasMedia('profileImage')) {
                // Clear the specific media collection
                $team->clearMediaCollection('profileImage');
            }

            $file = $request->file('profile_image'); // Retrieve the file from the request
            $team->addMedia($file)->toMediaCollection('profileImage'); // Add image to media collection
        }

        $team->update($data);

        return response()->json(['success' => 'Team User updated successfully!', 'redirect_to' => route('team.index'), 'data' =>  $request->all()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->hasMedia()) {
            $team->clearMediaCollection();
        }

        $team->delete();
        return redirect()->back()->with(['success' => 'Team User deleted successfully.']);
    }
}
