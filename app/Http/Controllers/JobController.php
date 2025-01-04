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
}
