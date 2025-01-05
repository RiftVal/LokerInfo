<?php

namespace App\Http\Controllers;


use App\Models\jobModel;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $data = jobModel::all();
        return view("dashboard.jobfind", compact('data'));
    }
    public function comapaniesJob()
    {
        $data = jobModel::all();
        return view("companies.jobAdd", compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'job_name' => 'required|max:255', 
            'job_desc' => 'required|string', 
            'job_companiesDesc' => 'required|string', 
            'job_location' => 'required|string|max:255', 
            'job_salary' => 'required|string', 
            'job_require' => 'required|string|max:255', 
            'employment_type' => 'required|in:Full-time,Part-time,Contract,Internship', 

        ]);

        jobModel::create([
            'job_name' => $request->job_name,
            'job_desc' => $request->job_desc,
            'job_companiesDesc' => $request->job_companiesDesc,
            'job_location' => $request->job_location,
            'job_salary' => $request->job_salary,
            'job_require' => $request->job_require,
            'employment_type' => $request->employment_type,
        ]);
        return redirect()->back()->with('success','Data berhasil disimpan');
    }
    public function show($id)
    {
        $data = jobModel::findOrFail($id);

        return view('dashboard.detailJob', compact('data'));
    }
    public function applicant($id)
    {
          $data = jobModel::findOrFail($id);

        return view('dashboard.applyJob', compact('data'));
    }
    public function storeApplicant(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255', 
            'home_location' => 'required|string', 
            'no_telp' => 'required|string', 
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'surat_lamaran' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'user_id' => 'required|string|max:255', 
            'job_id' => 'required|string|max:255', 

        ]);

        jobModel::create([
            'name' => $request->name, 
            'home_location' => $request->home_location, 
            'no_telp' => $request->no_telp, 
            'resume' => $request->file('resume')->store('resumes', 'public'), // Menyimpan file resume
            'surat_lamaran' => $request->file('surat_lamaran')->store('surat_lamaran', 'public'), // Menyimpan file surat lamaran
            'user_id' => $request->user_id, 
            'job_id' => $request->job_id, 

        ]);
        return redirect()->back()->with('success','Data MAhasiswa berhaisl disimpan');
 
    }
}
