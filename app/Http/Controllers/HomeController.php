<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::with('products')->where('status', 1)->get();
        // return $companies;
        return view('frontend.new_home', get_defined_vars());
    }
}
