<?php

namespace App\Http\Controllers;

use App\Models\Siswa as ModelsSiswa;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index(){
        return ModelsSiswa::all();
    }

    public function create(Request $request){
        $siswa = new ModelsSiswa();
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "data berhasil masuk";
    }

    public function update(Request $request,$id){
        //dd($request->all());
        $nama = $request->nama;
        $alamat = $request->alamat;
        
         $siswa = ModelsSiswa::find($id);
         $siswa->nama = $nama;
         $siswa->alamat = $alamat;
         $siswa->save();

        return "data berhasil di update";
    }

    public function delete($id){
        $siswa = ModelsSiswa::find($id);
        $siswa->delete();

        return "data berhasil di hapus";
    }
}
