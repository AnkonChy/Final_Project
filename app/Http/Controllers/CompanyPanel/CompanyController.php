<?php

namespace App\Http\Controllers\CompanyPanel;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Models\JobType;
use App\Models\Category;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.dashboard');
    }


    public function createJob()
    {
        return view('company.jobpost');
    }

    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|string|max:255',
            'job_type_id' => 'required|string|max:255',
            'vacancy' => 'required|integer|min:1',
            'salary' => 'string|max:255',
            'location' => 'required|string|max:200',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'qualifications' => 'required|string',
            'company-name' => 'required|string|max:255',
            'company-location' => 'required|string|max:255',
            'company-website' => 'nullable|string',
            'company_linkedin' => 'nullable|string|max:255',
        ]);

        Job::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'job_type_id' => $request->job_type_id,
            'vacancy' => $request->vacancy,
            'salary' => $request->salary,
            'location' => $request->location,
            'description' => $request->description,
            'benefits' => $request->benefits,
            'qualifications' => $request->qualifications,
            'company_name' => $request->input('company-name'),
            'company_location' => $request->input('company-location'),
            'company_website' => $request->input('company-website'),
            'company_linkedin' => $request->input('company_linkedin'),
        ]);


        return redirect()->route('company.dashboard');
    }

}
