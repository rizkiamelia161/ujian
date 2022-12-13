@extends('layouts.dashboard.dashboard')

@section('dashcontent')
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
    <div class="sidebar-brand">
    <a href="#">Buku Komunikasi Siswa</a>
    </div>
    <div class="sidebar-header">
    <div class="user-info">
    <span class="user-name">
    <strong>Rizki Amelia</strong>
    </span>
    </div>
    </div>
    <div class="sidebar-menu">
    <ul>
    <li class="header-menu">
    <span>General</span>
    </li>
    <li class="sidebar-dropdown">
    <a href="/" class="clicked-dashboard">
    <i class="fa fa-tachometer-alt"></i>
    <span>Dashboard</span>
    {{-- <span class="badge badge-pill badge-warning">New</span> --}}
    </a>
    <div class="sidebar-submenu">
    <ul>
    <li>
    <a href="#">Dashboard 1
    <span class="badge badge-pill badge-success">Pro</span>
    </a>
    </li>
    <li>
    <a href="#">Dashboard 2</a>
    </li>
    <li>
    <a href="#">Dashboard 3</a>
    </li>
    </ul>
    </div>
</li>
<li class="sidebar-dropdown">
    <a href="data" class="hover-dashboard">
    <i class="far fa-gem"></i>
    <span>Data</span>
    </a>
    <div class="sidebar-submenu">
    <ul>
    <li>
    <a href="#">General</a>
    </li>
    <li>
    <a href="#">Panels</a>
    </li>
    <li>
    <a href="#">Tables</a>
    </li>
    <li>
    <a href="#">Icons</a>
    </li>
    <li>
    <a href="#">Forms</a>
    </li>
    </ul>
    </div>
    </li>
    </div>
    <div class="sidebar-footer">
    <a href="#">
    <i class="fa fa-bell"></i>
    <a href="#">
    <i class="fa fa-envelope"></i>
    </a>
    <a href="#">
    <i class="fa fa-cog"></i>
    </a>
    <a href="{{ route('logout') }}">
    <i class="fa fa-power-off"></i>
    </a>
    </div>
    </nav>


    <div class="form">
        <form action="insertsiswa" method="POST">
            @csrf
          <p><Label>Nama Siswa : <input required="required" type="text" name="nama_siswa"></Label></p>
          <p><Label>Kelas : <input required="required" type="text" name="kelas_siswa"></Label></p>
          <p><label>Jurusan : <input required="required" type="text" name="jurusan"></label></p>
          <p><Label>NISN : <input  required="required" type="text" name="nisn"></Label></p>
          <p><label class="form-label">Kelamin :</label> <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
            </p>
          {{-- alamat siswa --}}
          <p><Label>Alamat : <input  required="required" type="text" name="alamat"></Label></p>
          <p><Label>Nomor Telp : <input  required="required" type="text" name="no_telp"></Label></p>
          <p><Label>Wali Kelas : <input  required="required" type="text" name="wali_kelas"></Label></p>
          <p><Label>Tanggal : <input  required="required" type="date" name="created_at"></Label></p>
          
          <br>
          <br>
          <button type="submit">Update</button>
          <button class="btn-cancel"><a href="dashboard">Cancel</a></button>
      </form>
        </div>
    @endsection('dashcontent')