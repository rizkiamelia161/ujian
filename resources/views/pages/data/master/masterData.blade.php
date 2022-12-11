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

{{-- <div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
		
		You are Login in Laravel 9 Custom Login Registration Application.
	</div>
</div> --}}

<main class="page-content">
    <div class="container-fluid">
    <h2><strong>Dashboard</strong></h2>
    <hr><br><br>
    <!-- <a href="tambahartikel.php" class="create-tb"></a> -->
    <form action="tambahartikel.php">
        <input type="submit" value="Adding Siswa" class="create-tb">
    </form>
    
                            <!-- PHP -->
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Last Data</h4>
                    <h6 class="card-subtitle">Data Siswa related</h6>
                </div>


                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>    
                                <th scope="col"><b>ID</b></th>
                                <th scope="col"><b>Nama Siswa</b></th>
                                <th scope="col"><b>Kelas</b></th>
                                <th scope="col"><b>Jurusan</b></th>
                                <th scope="col"><b>NISN</b></th>
                                <th scope="col"><b>Alamat</b></th>
                                <th scope="col"><b>Nomer Telp</b></th>
                                <th scope="col"><b>Wali Kelas</b></th>
                                <th scope="col"><b>Edit</b></th>
                                <th scope="col"><b>Delete</b></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $sis)               
                       <tr>
                        <td>  {{ $sis->id }}  </td>
                        <td> {{ $sis->nama_siswa }} </td>
                        <td> {{ $sis->kelas_siswa }} </td>
                        <td> {{ $sis->jurusan }} </td>
                        <td> {{ $sis->nisn }} </td>
                        <td> {{ $sis->alamat }} </td>
                        <td> {{ $sis->no_telp }} </td>
                        <td> {{ $sis->wali_kelas }} </td>
                        <td><a href=""><button type="button" class="btn btn-success">Edit</button></a></td>
                        <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
               
    
                    </tr>
                    @endforeach 
                                        
                        </tbody>
                    </table>

                                
                        </div>
                        
                        {{-- new table --}}
                    </div>
                    
                </div>
                <br>
                <hr>
                <br>

                    <form action="tambahartikel.php">
                        <input type="submit" value="Adding Guru" class="create-tb">
                    </form>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Last Data</h4>
                            <h6 class="card-subtitle">Data Guru related</h6>
                        </div>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>    
                                        <th scope="col"><b>ID</b></th>
                                        <th scope="col"><b>Nama Guru</b></th>
                                        <th scope="col"><b>Mata Pelajaran</b></th>
                                        <th scope="col"><b>Alamat</b></th>
                                        <th scope="col"><b>Umur</b></th>
                                        <th scope="col"><b>Edit</b></th>
                                        <th scope="col"><b>Delete</b></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guru as $guru)               
                               <tr>
                                <td> {{ $guru->id }} </td>
                                <td> {{ $guru->nama_guru }} </td>
                                <td> {{ $guru->mata_pelajaran }} </td>
                                <td> {{ $guru->alamat }} </td>
                                <td> {{ $guru->umur }} </td>
                                <td><a href=""><button type="button" class="btn btn-success">Edit</button></a></td>
                                <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
            
                            </tr>
                            @endforeach 
                                                
                                </tbody>
                            </table>
@endsection('dashcontent')