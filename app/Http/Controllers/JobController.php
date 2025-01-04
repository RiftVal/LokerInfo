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
        return redirect()->back()->with('success','Data MAhasiswa berhaisl disimpan');
    }
    public function show($id)
    {
        // Mengambil data pekerjaan berdasarkan ID
        $data = jobModel::findOrFail($id);

        // Mengirim data pekerjaan ke view
        return view('dashboard.detailJob', compact('data'));
    }
}
