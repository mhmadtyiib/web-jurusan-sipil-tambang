<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ManajemenTambang;

class ManajemenTambangController extends Controller
{
    function index (){
        $data['list_manajementambang'] = manajementambang::all();

        return view('backend/manajemen-tambang.index', $data);
    }

    function store (){
       $manajementambang = new ManajemenTambang();
       $manajementambang->nama = request('nama');
       $manajementambang->deskripsi = request('deskripsi');
       $manajementambang->handleUploadManajemenTambang();
       $manajementambang->save();

       return back();
    }

    function show(manajementambang $manajementambang)
    {
        $data['manajementambang'] = $manajementambang;
        return view('backend/manajementambang.show', $data);
    }

    function edit(ManajemenTambang $id )
    {

        return view('backend/manajementambang.edit', $id);
    }

    function aksiEdit($manajementambang){

        $manajementambang = ManajemenTambang::find($manajementambang);
        $manajementambang->nama = request('nama');
       $manajementambang->deskripsi = request('deskripsi');
       $manajementambang->handleUploadManajemenTambang();
       $manajementambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($manajementambang) {
        $manajementambang = ManajemenTambang::find($manajementambang);
        $manajementambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
