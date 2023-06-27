<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

@extends('layouts.app')
@extends('layouts.alert')

@section('content')

<div class="card mt-3">
              <h5 class="card-header">Barang</h5>
              <div class="card-body">
                <button type="button" class="btn btn-success mt-1 ms-1" data-bs-toggle="modal" data-bs-target="#myModal">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>     Tambah</button>
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
