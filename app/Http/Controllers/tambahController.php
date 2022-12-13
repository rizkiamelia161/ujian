<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\guru;
use App\Models\pelanggaran as kasus;
use App\Models\guru_siswa;
use App\Models\pelanggaran;
use Illuminate\Support\Facades\DB;

class tambahController extends Controller
{
    public function index() {
        return view('pages.data.master.siswa.form');
    }
    public function siswa(Request $request)
    { 
        // dd($request->all());
        siswa::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit_siswa($id) {
        $data = siswa::find($id);
        return view('pages.data.master.siswa.edit', compact('data'));
    }
    public function upsiswas(Request $request, $id) {
        $data = siswa::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Edit');
    }
    public function delete_siswa($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Hapus');
    }

    // guru
    public function indexg() {
        return view('pages.data.master.guru.form');
    }
    public function guru(Request $request)
    { 
        // dd($request->all());
        guru::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit_guru($id) {
        $data = guru::find($id);
        return view('pages.data.master.guru.edit', compact('data'));
    }
    public function upgurus(Request $request, $id) {
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Edit');
    }
    public function delete_guru($id)
    {
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Hapus');
    }
    
    // pelanggaran
    public function indexp() {
        return view('pages.data.master.pelanggaran.form');
    }
    public function kasus(Request $request)
    { 
        // dd($request->all());
        kasus::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit_kasus($id) {
        $data = kasus::find($id);
        return view('pages.data.master.pelanggaran.edit', compact('data'));
    }
    public function upkasuss(Request $request, $id) {
        $data = kasus::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Edit');
    }
    public function delete_kasus($id)
    {
        $data = kasus::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Hapus');
    }

    // relasi transaksi
    public function indexr() {
        return view('pages.data.pelanggaran.form');
    }

    public function tambahkasus()
    {
        $siswa = siswa::all();
        $pelanggaran = pelanggaran::all();
        $guru = guru::all();
        
        return view('pages.data.pelanggaran.form', compact('siswa', 'pelanggaran', 'guru'));
    }
    public function insertkasus(Request $request)
    {   
        guru_siswa::insert([
            'guru_id' => $request->guru_id,
            'siswa_id' => $request->siswa_id,
            'pelanggaran_id' => $request->pelanggaran_id,
        ]);
        return redirect()->route('data')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function delete_trans($id)
    {
        $data = DB::table('guru_siswas')->where('siswa_id', $id);
        $data->delete();
        return redirect()->route('data')->with('success', 'Data Berhasil Di Hapus');
    }
}