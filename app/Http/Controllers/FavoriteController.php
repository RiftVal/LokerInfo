<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
     // Tambahkan job ke favorit
     public function store(Request $request)
     {
         $request->validate([
             'user_id' => 'required|exists:users,id',
             'job_id' => 'required|exists:jobs,id',
         ]);
 
         $favorite = Favorite::create([
             'user_id' => $request->user_id,
             'job_id' => $request->job_id,
         ]);
 
         return response()->json(['message' => 'Job berhasil ditambahkan ke favorit!', 'favorite' => $favorite], 201);
     }
 
     // Hapus job dari favorit
     public function destroy(Request $request)
     {
         $request->validate([
             'user_id' => 'required|exists:users,id',
             'job_id' => 'required|exists:jobs,id',
         ]);
 
         $favorite = Favorite::where('user_id', $request->user_id)
             ->where('job_id', $request->job_id)
             ->first();
 
         if (!$favorite) {
             return response()->json(['message' => 'Favorite tidak ditemukan!'], 404);
         }
 
         $favorite->delete();
 
         return response()->json(['message' => 'Job berhasil dihapus dari favorit!']);
     }
 
     // Lihat semua job favorit pengguna
     public function index($user_id)
     {
         $favorites = Favorite::where('user_id', $user_id)->with('job')->get();
 
         return response()->json(['favorites' => $favorites]);
     }
}
