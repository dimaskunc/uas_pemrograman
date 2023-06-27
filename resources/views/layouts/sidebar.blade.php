@extends('layouts.apps')
@extends('layouts.alert')

@section('content')

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a class="navbar-brand mt-3" href="#">
                    <img src="https://i.postimg.cc/Fsq7KVS9/logohimatika-1-min.png" alt="" width="60" height="60" class="me-2"><strong>HIMATIKA</strong>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"> <span><svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>Data User</span>
                      </a>
                  </li>
                  
                  <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"> <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="none" width="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                      </svg>Mahasiswa</span></a>
                  </li>
                  
                  
                  <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">  <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>Penelitian</span> </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">  <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-1" fill="none" width="21" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                      </svg> Artikel</span> </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline"> <svg class="mb-2 me-1"  fill="#fafafa" width="21" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M86.5,38.1c8.4,0,15.2,6.8,15.2,15.2s-6.8,15.2-15.2,15.2s-15.2-6.8-15.2-15.2S78.1,38.1,86.5,38.1z M105.6,72.4H70.9 c-5,0-9.9,0.7-13.5,5.6c-1.6,2.4-16,20.6-16,20.6H21.1c-3.6,0-6.6,3-6.6,6.6s3,6.6,6.6,6.6h23.1c1.7,0,3.4-0.7,4.6-1.9l13.5-16.4 c0.4-0.4,0.7-0.6,1.3-0.6c1.1,0,1.9,0.7,1.9,1.9v29.9h42V95.2c0-1.1,0.7-1.9,1.9-1.9c1.1,0,1.9,0.7,1.9,1.9v29.5h13.3V91.5 C124.7,81,116.1,72.4,105.6,72.4z M7.5,79.5c0,0,0-1.7,0-2h24.7c-0.4,0.7-0.6,1.6-0.8,2.3C31.2,81,31.3,82,31.6,83l-20.7-0.1 C9,82.9,7.5,81.4,7.5,79.5 M34.8,34.9c0,3.5-0.1,34.9-0.1,38.4H11.1L25.9,61l-0.1-26.1C27.2,34.9,33.5,34.9,34.8,34.9 M37.1,83h-1 c-0.6-0.6-0.8-1.5-0.6-2.4c0.3-1.6,1.5-3,2-3.2l0,0c0.8-0.3,1.4-1,1.4-1.9L39,32.9c0-1.1-0.9-2.1-2.1-2.1c0,0-8.6,0-11,0 c0-2,0-4.8,0-4.8c0-0.8-0.5-1.6-1.2-1.9s-1.7-0.2-2.2,0.4L8,38.8c-2.6,2.5-4.5,7.3-4.5,10.8L3.3,79.5c0,4.2,3.4,7.6,7.5,7.6L37,87.2 c1.1,0,2.1-0.9,2.1-2.1l0,0C39.1,83.9,38.3,83,37.1,83"></path> </g></svg> Program Kerja</span> </a>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="col py-3">
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow p-3 mb-1 bg-body-tertiary rounded">
            <div class="container">
                                
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
              <h5 class="card-header">Featured</h5>
              <div class="card-body">
              <button type="button" class="btn btn-success mt-1 ms-1" data-bs-toggle="modal" data-bs-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>     Tambah</button>
        </div>  
        
        <div class="table-responsive px-4">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Foto Mahasiswa</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tahun Angkatan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        <tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td><img src="{{ asset('public/images/').$row->foto }}" alt=""></td>
                                <td>{{$row->nim}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->tahun_angkatan}}</td>
                                <td>{{$row->alamat}}</td>
                                <td>
                                  
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>Edit
                                  </button>
                                  <a href="{{url('/hapus-data-mahasiswa', $row->id)}}">
                                    <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>Hapus</button>
                              </a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div> 
        </div>
    </div>
</div>
</div>
</div>
<script>$(document).ready(function () {
    $('#pengeluaran').DataTable();
});</script>

@endsection
