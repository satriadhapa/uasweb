<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class KontakController extends Controller
{
    public function index(){

        $data = kontak::all();
        return view("admin", compact('data'));
    }

    public function tambah(){
        return view("tambah"); 
    }
    public function insertdata(Request $request){
        kontak::create($request->all());
        return redirect()->route('admin')->with('success','Data berhasil ditambahkan');
    }
    public function tampildata($id){
        $data = kontak::find($id);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = kontak::find($id);
        $data->update($request->all());
        return redirect()->route('admin')->with('success','Data berhasil diupdate');
    }
    public function deletedata($id){
        $data = kontak::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success','Data berhasil dihapus');
    }
}
