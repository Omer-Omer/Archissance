<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('company', 'category')->where('status', 1)->get();
        return view('backend.product.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view('backend.product.create', get_defined_vars());
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
            'company_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'stock_status' => 'required',
        ]);

        $data = [
            'company_id' => $request->company_id ?? Null,
            'category_id' => $request->category_id ?? Null,
            'title' => $request->title ?? Null,
            'price' => $request->price ?? Null,
            'stock_status' => $request->stock_status ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $product =  Product::create($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $product->addMedia($file)->toMediaCollection('thumbnail-image'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Product created successfully!', 'redirect_to' => route('product.index'), 'data' =>  $request->all()]);
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
        $companies = Company::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        $product = Product::with('company', 'category')->where('id', $id)->first();
        $images = $product->getMedia('thumbnail-image');

        return view('backend.product.edit', get_defined_vars());
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

        $product = Product::where('id', $id)->first();

        $validatedData = $request->validate([
            'company_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'stock_status' => 'required',
        ]);

        $data = [
            'company_id' => $request->company_id ?? Null,
            'category_id' => $request->category_id ?? Null,
            'title' => $request->title ?? Null,
            'price' => $request->price ?? Null,
            'stock_status' => $request->stock_status ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        $product->update($data);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $product->addMedia($file)->toMediaCollection('thumbnail-image'); // Add image to media collection
            }
        }

        return response()->json(['success' => 'Product updated successfully!', 'redirect_to' => route('product.index'), 'data' =>  $request->all()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->hasMedia()) {
            $product->clearMediaCollection();
        }

        $product->delete();
        return redirect()->back()->with(['success' => 'Product deleted successfully.']);
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
