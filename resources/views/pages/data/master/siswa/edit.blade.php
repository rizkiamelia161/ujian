@extends('layouts.dashboard.dashboard')

@section('dashcontent')
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
    <div class="sidebar-brand">
    <a href="#">Violation Book</a>
    
    <!-- close sidebar -->
    <!-- <div id="close-sidebar" class="hidden">
    <i class="fas fa-times"></i>
    </div> -->
    </div>
    <div class="sidebar-header">
    <div class="user-pic">
    <img class="img-responsive img-rounded" src="https://avatars.githubusercontent.com/u/79699856?s=400&u=c37075b5d4cc71e1f8d5bd8212613591ab975f67&v=4">
    </div>
    <div class="user-info">
    <span class="user-name">
    <strong>Qiraxyz</strong>
    </span>
    <span class="user-role">Owner</span>
    <span class="user-status">
    <i class="fa fa-circle"></i>
    <span>Online</span>
    </span>
    </div>
    </div>
    <!-- sidebar-header -->
    
    <!-- <div class="sidebar-search">
    <div>
    <div class="input-group">
    <input type="text" class="form-control search-menu" placeholder="Search...">
    <div class="input-group-append">
    <span class="input-group-text">
    <i class="fa fa-search" aria-hidden="true"></i>
    </span>
    </div>
    </div>
    </div>
    </div> -->
    <!-- sidebar-search -->
    
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
    
    
    <!-- E-commerce -->
    
    <!-- <li class="sidebar-dropdown">
    <a href="feedback.php">
    <i class="fa fa-shopping-cart"></i>
    <span>Feedback</span> -->
    <!-- <span class="badge badge-pill badge-danger">3</span> -->
    <!-- </a>
    <div class="sidebar-submenu">
    <ul>
    <li>
    <a href="#">Products
    </a>
    </li>
    <li>
    <a href="#">Orders</a>
    </li>
     <li>
    <a href="#">Credit cart</a>
    </li>
    </ul>
    </div>
    </li> -->
    
    <!-- Component -->
    
<li class="sidebar-dropdown">
    <a href="violation" class="hover-dashboard">
    <i class="far fa-gem"></i>
    <span>Violation</span>
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
    
    
    
    
    <!-- charts -->
    
    <!-- <li class="sidebar-dropdown">
    <a href="#">
    <i class="fa fa-chart-line"></i>
    <span>Charts</span>
    </a>
    <div class="sidebar-submenu">
    <ul>
    <li>
    <a href="#">Pie chart</a>
    </li>
    <li>
    <a href="#">Line chart</a>
    </li>
    <li>
    <a href="#">Bar chart</a>
    </li>
    <li>
    <a href="#">Histogram</a>
    </li>
    </ul>
    </div>
    </li> -->
    
    
    
    
    <!-- maps -->
    
    <!-- <li class="sidebar-dropdown">
    <a href="#">
    <i class="fa fa-globe"></i>
    <span>Maps</span>
    </a>
    <div class="sidebar-submenu">
    <ul>
    <li>
    <a href="#">Google maps</a>
    </li>
    <li>
    <a href="#">Open street map</a>
    </li>
    </ul>
    </div>
    </li>
    <li class="header-menu">
    <span>Extra</span>
    </li>
    <li>
    <a href="#">
    <i class="fa fa-book"></i>
    <span>Documentation</span>
    <span class="badge badge-pill badge-primary">Beta</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="fa fa-calendar"></i>
    <span>Calendar</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="fa fa-folder"></i>
    <span>Examples</span>
    </a>
    </li>
    </ul>
    </div> -->
    <!-- sidebar-menu -->
    </div>
    <!-- sidebar-content -->
    <div class="sidebar-footer">
    <a href="#">
    <i class="fa fa-bell"></i>
    <!-- <span class="badge badge-pill badge-warning notification">3</span> -->
    </a>
    <a href="#">
    <i class="fa fa-envelope"></i>
    <!-- <span class="badge badge-pill badge-success notification">7</span> -->
    </a>
    <a href="#">
    <i class="fa fa-cog"></i>
    <!-- <span class="badge-sonar"></span> -->
    </a>
    <a href="{{ route('logout') }}">
    <i class="fa fa-power-off"></i>
    </a>
    </div>
    </nav>


    <div class="form">
        <form action="/upsiswa/{{$data->id}}" method="POST">
            @csrf
          <!-- data pelanggan judul -->
          <!-- nama siswa -->
          <p><Label>Nama Siswa : <input value=" {{ $data->nama_siswa }} " required="required" type="text" name="nama_siswa"></Label></p>
          <!-- kelas siswa -->
          <p><Label>Kelas : <input value=" {{ $data->nama_siswa }}"" required="required" type="text" name="kelas_siswa"></Label></p>
          <!-- jurusan siswa -->
          <p><label>Jurusan : <input value=" {{ $data->nama_siswa }}" required="required" type="text" name="jurusan"></label></p>
          <!-- nisn siswa -->
          <p><Label>NISN : <input value=" {{ $data->nisn }}" @disabled(true) required="required" type="text" name="nisn"></Label></p>
          <p><label class="form-label">Kelamin :</label> <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected>{{ $data->jenis_kelamin }}</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
            </p>
          {{-- alamat siswa --}}
          <p><Label>Alamat : <input value=" {{ $data->alamat }}" required="required" type="text" name="alamat"></Label></p>
          <p><Label>Nomor Telp : <input value=" {{ $data->no_telp }}" required="required" type="text" name="no_telp"></Label></p>
          <p><Label>Wali Kelas : <input value=" {{ $data->wali_kelas }}" required="required" type="text" name="wali_kelas"></Label></p>
          
          <br>
          <br>
          <button type="submit">Update</button>
          <button class="btn-cancel"><a href="dashboard">Cancel</a></button>
      </form>
        </div>
    @endsection('dashcontent')