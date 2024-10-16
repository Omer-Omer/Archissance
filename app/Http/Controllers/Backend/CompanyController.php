<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('status', 1)->get();
        return view('backend.company.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // 'introduction'  => 'required',
            // 'details'  => 'required',
            // 'apparel_categories'  => 'required',
            // 'manufacturing'  => 'required',
            // 'contact'  => 'required',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Validate each image
        ]);

        // Save the company details (text fields)
        // $company = new Company();
        // $company->name = $request->company_name;
        // $company->description = $request->description;
        // $company->save();

        // $data = $request->except(['_token', '_method','status', 'meta_title', 'meta_description']);

        $data['name'] = $request->name;
        $data['introduction'] = $request->introduction;
        $data['details'] = $request->details;
        $data['apparel_categories'] = $request->apparel_categories;
        $data['manufacturing'] = $request->manufacturing;
        $data['contact'] = $request->contact;

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $company =  Company::create($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $company->addMedia($file)->toMediaCollection('slider-image'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Company created successfully!', 'redirect_to' => route('company.index'), 'data' =>  $request->all()]);


        // return redirect()->route('company.index')->with('success', 'Company created successfully!');
        // if ($request->ajax()) {
        //     return response()->json(['success' => 'Post created successfully!']);
        // }
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
        // return $id;
        $company = Company::where('id', $id)->first();
        $images = $company->getMedia('slider-image');
        // return $images;
        return view('backend.company.edit', get_defined_vars());
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

        // return response()->json($request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $company = Company::where('id', $id)->first();
        $data['name'] = $request->name;
        $data['introduction'] = $request->introduction;
        $data['details'] = $request->details;
        $data['apparel_categories'] = $request->apparel_categories;
        $data['manufacturing'] = $request->manufacturing;
        $data['contact'] = $request->contact;

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $company->update($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $company->addMedia($file)->toMediaCollection('slider-image'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Company updated successfully!', 'redirect_to' => route('company.index'), 'data' =>  $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        // Delete all associated media
        if ($company->hasMedia()) {
            $company->clearMediaCollection(); // Delete all media associated with the company
        }

        // Delete the company
        $company->delete();

        return redirect()->back()->with(['success' => 'Company deleted successfully.']);
        // return response()->json(['success' => 'Company deleted successfully.']);
    }

    public function deleteImage($id)
    {
        $mediaItem = \Spatie\MediaLibrary\MediaCollections\Models\Media::findOrFail($id);

        // Optional: Check if the media belongs to a specific model
        // $company = Company::find($mediaItem->model_id);
        // if ($company->id !== $mediaItem->model_id) {
        //     abort(403, 'Unauthorized action.');
        // }

        $mediaItem->delete(); // Delete the media item

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }

}
