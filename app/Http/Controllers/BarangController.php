<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Session;
use PDF;
use DB;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang', compact('data'));
    }

    public function pdf()
    {
        $data = DB::select('select * from tb_barang');
        $pdf = PDF::loadView('barang-pdf',compact('data'));
          $pdf->setPaper('A4', 'potrait'); 
            return $pdf->stream('Data Barang.pdf');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'stok_barang' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
        ]);

        $file = $request->file('foto2');

        $destination = public_path('images');

        $file->move($destination, $file->getClientOriginalName());
        
        $data = new Barang();
        $data->foto = $file->getClientOriginalName();
        $data->nama_barang = $request->nama_barang;
        $data->stok_barang = $request->stok_barang;
        $data->harga_beli = $request->harga_beli;
        $data->harga_jual = $request->harga_jual;

        $data->save();
        Session::flash('sukses', 'Data berhasil disimpan');
        return back();
    }

    public function hapus($id)
    {
        $data = Barang::find($id);
        $data->delete();
        Session::flash('sukses', 'Data berhasil dihapus');
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);

        $fotoLawas = $data->foto;
        $destination = public_path('images');
        Storage::delete($destination."/".$fotoLawas);

        if ($request->file('foto') !== null) {
            $file = $request->file('foto');
            
            $file->move($destination, $file->getClientOriginalName());
            $data->foto = $file->getClientOriginalName();
        }

        $data->nama_barang = $request->nama_barang;
        $data->stok_barang = $request->stok_barang;
        $data->harga_beli = $request->harga_beli;
        $data->harga_jual = $request->harga_jual;

        $data->save();
        Session::flash('sukses', 'Data berhasil diupdate');
        return back(); 
    }
}
