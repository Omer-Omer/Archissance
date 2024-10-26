<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $companies = Company::with('products')->where('status', 1)->get();
        // return $companies;

        $banners = Page::where(['name' => 'home', 'type' => 'banner'])->get();

        return view('frontend.home', get_defined_vars());
    }
}
