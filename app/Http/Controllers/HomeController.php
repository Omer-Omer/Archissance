<?php

namespace App\Http\Controllers;

use App\Mail\LeadMail;
use App\Models\Company;
use App\Models\Configuration;
use App\Models\Page;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

    public function about(){
        $aboutPage = Page::where(['name' => 'about', 'type' => 'content'])->first();

        $aboutJsonContent = json_decode($aboutPage->content);
        // return $aboutJsonContent->description;

        $featureWorkData = Page::where(['name' => 'home', 'type' => 'feature-work'])->first();
        $projectIds = isset($featureWorkData) ? json_decode($featureWorkData->content) : array();
        $projectList = Project::whereIn('id', $projectIds)->get();


        return view('frontend.aboutus', get_defined_vars());
    }

    public function contact(){
        $aboutPage = Page::where(['name' => 'about', 'type' => 'content'])->first();

        $aboutJsonContent = json_decode($aboutPage->content);
        // return $aboutJsonContent->description;

        $featureWorkData = Page::where(['name' => 'home', 'type' => 'feature-work'])->first();
        $projectIds = isset($featureWorkData) ? json_decode($featureWorkData->content) : array();
        $projectList = Project::whereIn('id', $projectIds)->get();


        return view('frontend.contact', get_defined_vars());
    }

    public function contactStore(Request $request) {

        Log::info($request->all());
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required',
        ]);

        $jsonContent = [
            'description' => $request->description ?? Null,
            'more_description' => $request->more_description ?? Null,
        ];

        $data = [
            'first_name' => $request->firstName ?? null,
            'last_name' => $request->lastName ?? null,
            'email' => $request->email ?? null,
            'phone' => $request->phone ?? null,
            'comment' => $request->comment ?? null,
        ];

        $emailConfig = Configuration::where('key', 'emails')->first();

        Log::info($emailConfig);


        if (isset($emailConfig) && !empty($emailConfig->value)) {
            $emails = explode(',', $emailConfig->value);
        }else{
            $emails[] = env('MAIL_FROM_ADDRESS');
        }

        $fromName = env('APP_NAME');

        Log::info($emails);

        // Send the email
        Mail::to($emails)
        ->send((new LeadMail($data))->from(config('mail.from.address'), $fromName));

        return response()->json(['success' => 'Lead submitted successfully!', 'redirect_to' => '/', 'data' =>  $request->all()]);
    }

    public function team(){

        $teams = Team::where('status', 1)->get();
        return view('frontend.team', get_defined_vars());
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
