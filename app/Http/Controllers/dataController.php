<?php

namespace App\Http\Controllers;

// use App\Models\guru;
use App\Models\siswa as data;
use App\Models\pelanggaran;
use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\Auth;

class dataController extends Controller
{
  public function index() {
    // $siswa = siswa::all();
    // // $gurus = guru::all();
    // // $roleIds = [1, 2];
    // // $siswa->role()->attach($roleIds);    
    // return view('layouts.violationData', ['siswa' => $siswa]);

    $siswa = siswa::with(['guruss'],['kasus'])->get();
   
    // $siswa = siswa::with('guru')->first();

        return view('pages.data.pelanggaran.violationData', compact('siswa'));
  }
  public function kasus() {
    $siswa = siswa::with(['kasus'])->get();
   
    // $siswa = siswa::with('guru')->first();

        return view('pages.data.pelanggaran.violationData', compact('kasus'));
  }

  // $posts = Post::with(['tags'])->latest()->paginate(10);
  //       return view('posts.index', compact('posts'));
   
}
