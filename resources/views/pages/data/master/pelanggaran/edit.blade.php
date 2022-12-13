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
        <form action="/upkasus/{{$data->id}}" method="POST">
            @csrf
          <p><Label>Pelanggaran : <input value=" {{ $data->pelanggaran }} " required="required" type="text" name="pelanggaran"></Label></p>
          <p><Label>Tindakan : <input value=" {{ $data->tindak_lanjut }}"" required="required" type="text" name="tindak_lanjut"></Label></p>
          <p><label>Point : <input value=" {{ $data->jumlah_point }}" required="required" type="text" name="jumlah_point"></label></p>
          <br>
          <br>
          <button type="submit">Update</button>
          <button class="btn-cancel"><a href="dashboard">Cancel</a></button>
      </form>
        </div>
    @endsection('dashcontent')