<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;

class feedbackController extends Controller
{
    public function index()
    {
        // $totalJobs = Feedback::count(); 
        $data = Feedback::all();
        return view("dashboard.feedback", compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'feed' => 'required|string',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
        ]);
        
        Feedback::create([
            'name' => $request->name,
            'feed' => $request->feed,
            'email' => $request->email,
            'subject' => $request->subject,
       ]);
        return redirect()->back()->with('success','Data berhaisl disimpan');
    
    }
}
