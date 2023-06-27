<?php

namespace App\Http\Controllers;
use App\Models\User;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = User::all();
        return view('home', compact('data'));
    }

    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        Session::flash('sukses', 'Data berhasil dihapus');
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        


        $data->save();
        Session::flash('sukses', 'Data berhasil diupdate');
        return back(); 
    }
    
}
