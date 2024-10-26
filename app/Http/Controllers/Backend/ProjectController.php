<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('backend.project.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.create', get_defined_vars());
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
            'location' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $data = [
            'name' => $request->name ?? Null,
            'location' => $request->location ?? Null,
            'type' => $request->type ?? Null,
            'description' => $request->description ?? Null,
            'more_description' => $request->more_description ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $data['show_detail'] = 0;
        if($request->show_detail  == "on") {
            $data['show_detail'] = 1;
        }

        $project =  Project::create($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $project->addMedia($file)->toMediaCollection('projectImages'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Project created successfully!', 'redirect_to' => route('project.index'), 'data' =>  $request->all()]);
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
        $project = Project::where('id', $id)->first();
        $images = $project->getMedia('projectImages');

        // return $project;
        return view('backend.project.edit', get_defined_vars());
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
        $project = Project::where('id', $id)->first();

        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $data = [
            'name' => $request->name ?? Null,
            'location' => $request->location ?? Null,
            'type' => $request->type ?? Null,
            'description' => $request->description ?? Null,
            'more_description' => $request->more_description ?? Null,
        ];
        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $data['show_detail'] = 0;
        if($request->show_detail  == "on") {
            $data['show_detail'] = 1;
        }

        $project->update($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $project->addMedia($file)->toMediaCollection('projectImages'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Project updated successfully!', 'redirect_to' => route('project.index'), 'data' =>  $request->all()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->hasMedia()) {
            $project->clearMediaCollection();
        }

        $project->delete();
        return redirect()->back()->with(['success' => 'Project deleted successfully.']);
    }

    public function deleteImage($id)
    {
        $mediaItem = \Spatie\MediaLibrary\MediaCollections\Models\Media::findOrFail($id);
        $mediaItem->delete(); // Delete the media item
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}
