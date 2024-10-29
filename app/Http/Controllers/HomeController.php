<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $companies = Company::with('products')->where('status', 1)->get();
        // return $companies;

        $banners = Page::where(['name' => 'home', 'type' => 'banner'])->get();
        $content = Page::where(['name' => 'home', 'type' => 'content'])->first();

        $featureWorkData = Page::where(['name' => 'home', 'type' => 'feature-work'])->first();
        $projectIds = isset($featureWorkData) ? json_decode($featureWorkData->content) : array();
        $projectList = Project::whereIn('id', $projectIds)->get();


        foreach($projectList as $p => $project) {
            ${"project_" . $project->id} = $project;
        }
        return view('frontend.home', get_defined_vars());
    }

    public function projects()
    {

        $type = 1;
        if (request()->has('type')) {
            $type = request()->query('type');
        }
        $residential = Project::where(['type' => 1, 'status' => 1])->get();
        $industrial = Project::where(['type' => 2, 'status' => 1])->get();
        $commercial = Project::where(['type' => 3, 'status' => 1])->get();
        return view('frontend.projects', get_defined_vars());
    }

    public function projectDetail($id)
    {
        $project = Project::where(['id' => $id])->first();
        $images = $project->getMedia('projectImages');
        return view('frontend.project-detail', get_defined_vars());
    }
}
