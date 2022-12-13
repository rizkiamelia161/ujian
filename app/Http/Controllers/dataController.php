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
    $siswa = siswa::with(['guruss'],['kasus'])->get();

        return view('pages.data.pelanggaran.data', compact('siswa'));
  }
  public function kasus() {
    $siswa = siswa::with(['kasus'])->get();
        return view('pages.data.pelanggaran.data', compact('kasus'));
  }
}
