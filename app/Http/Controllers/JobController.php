<?php

namespace App\Http\Controllers;

use App\Models\jobApplicant;
use App\Models\jobModel;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function comapaniesJob()
    {
        $data = jobModel::all();
        return view("dashboard.jobfind", compact('data'));
    }
    public function companiesJob()
    {
        $data = jobModel::all();
        return view("companies.jobAdd", compact('data'));
    }
    public function myApplicant()
    {
        $data = jobApplicant::query();
        if(auth()->user()){
            $data = $data->where('user_id',auth()->user()->id);
        }
        $data = $data->get();
        return view("dashboard/myApplicant", compact('data'));
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
    public function storeApplicant(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:255', 
            'home_location' => 'required|string', 
            'no_telp' => 'required|string', 
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'job_applicant' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);
       
        jobApplicant::create([
            'name' => $request->name, 
            'home_location' => $request->home_location, 
            'no_telp' => $request->no_telp, 
            'resume' => $request->file('resume')->store('resumes', 'public'), // Menyimpan file resume
            'job_applicant' => $request->file('job_applicant')->store('job_applicant', 'public'), // Menyimpan file surat lamaran
            'user_id' => auth()->user()->id, 
            'job_id' => $id, 

        ]);
        return redirect()->route('dashboard')->with('success','Data MAhasiswa berhaisl disimpan');
    }

    // Update Job
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'job_name' => 'required|max:255', 
            'job_desc' => 'required|string', 
            'job_companiesDesc' => 'required|string', 
            'job_location' => 'required|string|max:255', 
            'job_salary' => 'required|string', 
            'job_require' => 'required|string|max:255', 
            'employment_type' => 'required|in:Full-time,Part-time,Contract,Internship', 
        ]);

        // Find the job by its ID and update the details
        $job = jobModel::findOrFail($id);
        $job->job_name = $request->job_name;
        $job->job_desc = $request->job_desc;
        $job->job_companiesDesc = $request->job_companiesDesc;
        $job->job_location = $request->job_location;
        $job->job_salary = $request->job_salary;
        $job->job_require = $request->job_require;
        $job->employment_type = $request->employment_type;
        $job->save();

        return redirect()->back()->with('success', 'Data pekerjaan berhasil diperbarui');
    }

    // Delete Job
    public function destroy($id)
    {
        // Find the job by its ID and delete it
        $job = jobModel::findOrFail($id);
        $job->delete();

        return redirect()->back()->with('success', 'Data pekerjaan berhasil dihapus');
    }
}
