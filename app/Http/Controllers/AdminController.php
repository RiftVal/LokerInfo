<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Category;
use App\Models\jobModel;

class AdminController extends Controller
{

    public function index()
    {
        $totaljob = JobModel::count();
        return view("admin.admin", compact('totaljob'));
    }
    public function category()
    {
        $data = Category::all();
        return view("admin.categoryAdmin", compact('data'));
    }
    public function Feedback()
    {
        $data = Feedback::all();
        return view("admin.feedbackAdmin", compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|string',
        ]);
        
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
       ]);
        return redirect()->back()->with('success','Data berhaisl disimpan');
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|max:255', 
            'slug' => 'required|string',  
        ]);

        $cat = Category::findOrFail($id);
        $cat->name = $request->name;
        $cat->slug = $request->slug;
        $cat->save();

        return redirect()->back()->with('success', 'Data pekerjaan berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
