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
    </div>
    <div class="sidebar-footer">
    <a href="#">
    <i class="fa fa-bell"></i>
    </a>
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
        <form action="/uptrans/{{$data->id}}" method="POST">
            @csrf
          <!-- data pelanggan judul -->
          <!-- nama siswa -->
          <p><Label>Nama siswa : <input value=" {{ $data->nama_siswa }} " required="required" type="text" name="nama_guru"></Label></p>
          <!-- kelas siswa -->
          <p><Label>Kelas : <input value=" {{ $data->kelas_siswa }}" required="required" type="text" name="mata_pelajaran"></Label></p>
          <!-- jurusan siswa -->
          <p><label>Jurusan : <input value=" {{ $data->jurusan }}" required="required" type="text" name="alamat"></label></p>
          @foreach ($data->guruss as $g)
          <p><label>Pengurus : <input value=" {{ $g->nama_guru }}" required="required" type="text" name="alamat"></label></p>    
          @endforeach

          @foreach ($data->kasus as $k)
          <p><label>Kasus : <input value=" {{ $k->pelanggaran }}" required="required" type="text" name="alamat"></label></p>
          <p><label>Point : <input value=" {{ $k->jumlah_point }}" required="required" type="text" name="alamat"></label></p>              
          @endforeach
          <p><label>Wali Kelas : <input value=" {{ $data->wali_kelas }}" required="required" type="text" name="alamat"></label></p>
          <br>
          <br>
          <button type="submit">Update</button>
          <button class="btn-cancel"><a href="dashboard">Cancel</a></button>
      </form>
        </div>
    @endsection('dashcontent')