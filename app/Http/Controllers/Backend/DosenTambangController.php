<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\DosenTambang;

class DosenTambangController extends Controller
{
    function index (){
        $data['list_dosentambang'] = dosentambang::all();

        return view('backend/dosen-tambang.index', $data);
    }

    function store (){
       $dosentambang = new DosenTambang();
       $dosentambang->nama = request('nama');
       $dosentambang->jabatan = request('jabatan');
       $dosentambang->nidn = request('nidn');
       $dosentambang->nip = request('nip');
       $dosentambang->handleUploadDosenTambang();
       $dosentambang->save();

       return back();
    }

    function show(dosentambang $dosentambang)
    {
        $data['dosentambang'] = $dosentambang;
        return view('backend/dosentambang.show', $data);
    }

    function edit(DosenTambang $id )
    {

        return view('backend/dosentambang.edit', $id);
    }

    function aksiEdit($dosentambang){

        $dosentambang = DosenTambang::find($dosentambang);
        $dosentambang->nama = request('nama');
       $dosentambang->jabatan = request('jabatan');
       $dosentambang->nidn = request('nidn');
       $dosentambang->nip = request('nip');
       $dosentambang->handleUploadDosentambang();
       $dosentambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($dosentambang) {
        $dosentambang = DosenTambang::find($dosentambang);
        $dosentambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
