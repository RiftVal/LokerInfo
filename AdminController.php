<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{  
    public function index()
    {
        $jobs = Job::all(); 
        return view('admin.jobs.index', compact('jobs')); 
    } 
    public function create()
    {
        return view('admin.jobs.create'); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'description' => 'required',
        ]);

        Job::create($request->all());
        return redirect()->route('admin.jobs.index')->with('success', 'Job created successfully.');
    }
    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'description' => 'required',
        ]);

        $job->update($request->all()); 
        return redirect()->route('admin.jobs.index')->with('success', 'Job updated successfully.');
    }
    public function destroy(Job $job)
    {
        $job->delete(); 
        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }
}