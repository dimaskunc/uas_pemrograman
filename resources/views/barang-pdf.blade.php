@extends('layouts.app-pdf')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center;margin-bottom: 10px;font-size: 30px;">{{ __('Barang') }}</div>
              <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-responsive table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th class="text-center">No</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Stok Barang</th>
                                    <th class="text-center">Harga Beli</th>
                                    <th class="text-center">Harga Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $row)
                            <tr>
                                <td>{{$no+1}}</td>
                                       <td >{{$row->foto}}</td>
                                        <td>{{$row->nama_barang}}</td>
                                        <td>{{$row->stok_barang}}</td>
                                        <td>{{$row->harga_beli}}</td>
                                        <td>{{$row->harga_jual}}</td>
                                        
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

@endsection