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
    <form action="siswainput">
        <input type="submit" value="Adding Siswa" class="create-tb">
    </form>
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
                                <th scope="col"><b>Kelamin</b></th>
                                <th scope="col"><b>Alamat</b></th>
                                <th scope="col"><b>Nomer Telp</b></th>
                                <th scope="col"><b>Wali Kelas</b></th>
                                <th scope="col"><b>Tanggal</b></th>
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
                        <td> {{ $sis->jenis_kelamin }} </td>
                        <td> {{ $sis->alamat }} </td>
                        <td> {{ $sis->no_telp }} </td>
                        <td> {{ $sis->wali_kelas }} </td>
                        <td> {{ $sis->created_at }} </td>
                        <td><a href="editsiswa/{{$sis->id}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                        <td><a href="deletesiswa/{{$sis->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
               
    
                    </tr>
                    @endforeach 
                                        
                        </tbody>
                    </table>

                                
                        </div>
                        
                        {{-- new table --}}
                    </div>
                    
                </div>
                <br>
                <br>
                <h2><strong>Data Guru</strong></h2>
                <hr>
                <br>

                    <form action="guruinput">
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
                                <td><a href="editguru/{{$guru->id}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                                <td><a href="deleteguru/{{$guru->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            
                            </tr>
                            @endforeach 
                                                
                                </tbody>
                            </table>

            {{-- data pelanggaran --}}
                        </div>
                    </div>
            <br>
            <br>
            <h2><strong>Data Pelanggaran</strong></h2>
            <hr>
            <br>

            <form action="kasusinput">
                <input type="submit" value="Adding Pelanggaran" class="create-tb">
            </form>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Last Data</h4>
                        <h6 class="card-subtitle">Data Pelanggaran related</h6>
                    </div>


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>    
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>Pelanggaran</b></th>
                                    <th scope="col"><b>Tindak Lanjut</b></th>
                                    <th scope="col"><b>Point</b></th>
                                    <th scope="col"><b>Tanggal</b></th>
                                    <th scope="col"><b>Edit</b></th>
                                    <th scope="col"><b>Delete</b></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggaran as $pel)               
                           <tr>
                            <td> {{ $pel->id }} </td>
                            <td> {{ $pel->pelanggaran }} </td>
                            <td> {{ $pel->tindak_lanjut }} </td>
                            <td> {{ $pel->jumlah_point }} </td>
                            <td> {{ $pel->created_at }} </td>
                            <td><a href="editkasus/{{$pel->id}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                            <td><a href="deletekasus/{{$pel->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
        
                        </tr>
                        @endforeach 
                                            
                            </tbody>
                        </table>
@endsection('dashcontent')