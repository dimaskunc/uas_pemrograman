<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

@extends('layouts.apps')
@extends('layouts.alert')

@section('content')
<div class="">
  <div class="d-flex flex-nowrap" style="position: relative;">
    <div class="col-auto col-md-3 col-xl-2 mx-0 px-0 bg-dark h-100" style="position: sticky; top: 0;">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item mt-2">

        <a class="navbar-brand mt-3" href="#">
          <img src="https://i.postimg.cc/Mpb92L9s/logo-warung-sembako-7-removebg-preview.png" alt="" width="90" height="120" class="ms-3 mt-1">
        </a>
            <a style="color: white" class="nav-link align-middle px-0" href="{{route('home')}}">
              <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"> <span><svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>Data User</span>
            </a>
          </li>
                  <li>
                    <a style="color: white" class="nav-link px-0 align-middle mt-2" href="{{route('barang')}}">
                      <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" class="me-1" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                      </svg>
                    Data Barang</span> </a>
                  </li>
                </ul>
                
              </div>
            </div>
            <div class="col py-3" style="position: relative;">
              <nav style="position: sticky; top: 0; z-index: 20;" class="navbar navbar-expand-md navbar-light bg-light shadow p-3 mb-1 bg-body-tertiary rounded">
                <div class="container">
                  <a class="navbar-brand fs-3" href="{{ url('/') }}">
                    <h5 class="card-title">Selamat Datang Di Halaman Admin</h5> 
                  </a>
                  
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                      @if (Route::has('login'))
                      <li class="nav-item">
                        <a class="btn btn-primary btn-md " href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @endif

                      @if (Route::has('register'))
                      <li class="nav-item">
                        <a class=" btn btn-primary btn-md ms-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                      @endif
                      @else
                      <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" class="ms-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                          </svg>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </div>
                    </li>
                    @endguest
                  </ul>
                </div>
              </div>
            </nav>
<div class="card mt-3">
              <h5 class="card-header">Barang</h5>
              <div class="card-body">
                <button type="button" class="btn btn-success mt-1 ms-1" data-bs-toggle="modal" data-bs-target="#myModal">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>     Tambah</button>
                  <a href="{{url('/barang-pdf')}}"><div class="btn btn-danger mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>
Download PDF</div></a>
                </div>

                <div class="table table-responsive px-4">
                  <table class="table table-responsive table-bordered table-striped table-hover" id="barang">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">Stok Barang</th>
                        <th class="text-center">Harga Beli</th>
                        <th class="text-center">Harga Jual</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td class="text-center"><img style="width: 100px;" src="{{ asset('/images/')}}/{{$row->foto }}" alt=""></td>
                        <td style="width: 15%;">{{$row->nama_barang}}</td>
                        <td style="width: 15%;">{{$row->stok_barang}}</td>
                        <td style="width: 15%;">{{$row->harga_beli}}</td>
                        <td style="width: 15%;">{{$row->harga_jual}}</td>
                        <td>
                          <div class="d-flex justify-content-center py-3">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>

                          Edit
                        </button>
                        <a href="{{url('/hapus-data-barang', $row->id)}}">
                          <button class="btn btn-danger ms-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        Hapus</button>
                      </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                  </div>
                </div>
              </div>
            </div>
          </div>

   <!-- The Modal -->
   <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <form action="{{url('simpan-data-barang')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <label>Foto</label>
                    <input type="file" name="foto2" class="form-control" value="{{ old('foto')}}">
                    @error('foto')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang')}}">
                    @error('nama_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Stok Barang</label>
                    <input type="number" name="stok_barang" class="form-control" value="{{ old('stok_barang')}}">
                    @error('stok_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Harga beli</label>
                    <input type="number" name="harga_beli" class="form-control" value="{{ old('harga_beli')}}">
                    @error('harga_beli')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Harga Jual</label>
                    <input type="number" name="harga_jual" class="form-control" value="{{ old('harga_jual')}}">
                    @error('harga_jual')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          @foreach($data as $row)
          <!-- The Modal -->
          <div class="modal" id="myModal{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <form action="{{url('update-data-barang')}}/{{$row->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <label for="file-foto">Foto</label>
                    <input id="file-foto" type="file" name="foto" class="form-control" value="{{$row->foto}}">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{$row->nama_barang}}">
                    <label>Stok Barang</label>
                    <input type="number" name="stok_barang" class="form-control" value="{{$row->stok_barang}}">
                    <label>Harga beli</label>
                    <input type="number" name="harga_beli" class="form-control" value="{{$row->harga_beli}}">
                    <label>Harga Jual</label>
                    <input type="number" name="harga_jual" class="form-control" value="{{$row->harga_jual}}">
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          <script>$(document).ready(function () {
            $('#barang').DataTable();
          });</script>
@endsection
