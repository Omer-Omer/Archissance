<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeBanner() {

       $banners = Page::where(['name' => 'home', 'type' => 'banner'])->get();
        return view('backend.home.banner.index', get_defined_vars());
    }
    public function homeBannerCreate() {
        return view('backend.home.banner.create');
    }
    public function homeBannerStore(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $data = [
            'name' => 'home',
            'type' => 'banner',
            'title' => $request->title ?? Null,
            'description' => $request->description ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        // return $data;
        $page =  Page::create($data);

        if ($request->hasFile('image')) {
            $page->addMedia($request->image)->toMediaCollection('homeBannerImages'); // Add image to media collection

        }

        return response()->json(['success' => 'Banner created successfully!', 'redirect_to' => route('home.banner.index'), 'data' =>  $request->all()]);

    }
    public function homeBannerEdit($id) {
        // return $id;

        $banner = Page::where('id', $id)->first();
        return view('backend.home.banner.edit', get_defined_vars());
    }

    public function homeBannerUpdate(Request $request, $id) {

        $page = Page::where('id', $id)->first();

        $hasMedia = $page->hasMedia('homeBannerImages');

        $validatedData = $request->validate([
            'title' => 'required',
            'image' => $hasMedia ? 'nullable' : 'required',
            'description' => 'required',
        ]);

        $data = [
            'name' => 'home',
            'type' => 'banner',
            'title' => $request->title ?? Null,
            'description' => $request->description ?? Null,
        ];

        $data['status'] = 0;
        if($request->status  == "on") {
            $data['status'] = 1;
        }

        // return $data;
        $page->update($data);

        if ($page->hasMedia('homeBannerImages')) {
            // Clear the specific media collection
            $page->clearMediaCollection('homeBannerImages');
        }

        if ($request->hasFile('image')) {
            $page->addMedia($request->image)->toMediaCollection('homeBannerImages'); // Add image to media collection
        }

        return response()->json(['success' => 'Banner updated successfully!', 'redirect_to' => route('home.banner.index'), 'data' =>  $request->all()]);

    }
    public function homeBannerDelete($id) {
        $page = Page::findOrFail($id);

        if ($page->hasMedia()) {
            $page->clearMediaCollection();
        }

        $page->delete();
        return redirect()->back()->with(['success' => 'Banner deleted successfully.']);
    }
}
