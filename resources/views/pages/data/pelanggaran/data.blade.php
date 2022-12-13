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
    <a href="/" class="hover-dashboard">
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
    <a href="Data" class="clicked-dashboard">
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

{{-- <div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
		
		You are Login in Laravel 9 Custom Login Registration Application.
	</div>
</div> --}}

<main class="page-content">
    <div class="container-fluid">
    <h2><strong>Transaksi data</strong></h2>
    <hr><br><br>
    <form action="transinput">
        <input type="submit" value="Adding Pelanggaran" class="create-tb">
    </form>
                            <!-- PHP -->
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Last Transaksi Data</h4>
                    <h6 class="card-subtitle">Data Updated</h6>
                </div>


                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>    
                                <th scope="col"><b>ID</b></th>
                                <th scope="col"><b>Nama Siswa</b></th>
                                <th scope="col"><b>Kelas</b></th>
                                <th scope="col"><b>Jurusan</b></th>
                                <th scope="col"><b>Guru Pengurus</b></th>
                                <th scope="col"><b>Kasus Pelanggaran</b></th>
                                <th scope="col"><b>Point</b></th>
                                <th scope="col"><b>Tanggal</b></th>
                                <th scope="col"><b>Wali Kelas</b></th>

                               


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $sis)               
                       <tr>
                        <td>  {{ $sis->id }}  </td>
                        <td> {{ $sis->nama_siswa }} </td>
                        <td> {{ $sis->kelas_siswa }} </td>
                        <td> {{ $sis->jurusan }} </td>
                        @foreach ($sis->guruss as $gu)
                        <td> {{ $gu->nama_guru }} </td>      
                        @endforeach           
                        @foreach ($sis->Kasus as $ka)
                        <td> {{ $ka->pelanggaran }} </td>
                        <td> {{ $ka->jumlah_point }} </td>
                        @endforeach
                        
                        <td> {{ $sis->created_at }} </td>  
                        <td> {{ $sis->wali_kelas }} </td>

                     
                        
                        {{-- <td><a href="edittrans/{{$sis->id}}"><button type="button" class="btn btn-success">Edit</button></a></td> --}}
                        <td><a href="deletetrans/{{$sis->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach 
                                        
                        </tbody>
                    </table>
                    {{-- @foreach ($siswa as $data)
                    @foreach ($data->Kasus as $i)
                    
                    <p> {{ $i->count() }} </p>
                    @endforeach
                        
                    @endforeach --}}
                                
                        </div>
@endsection('dashcontent')