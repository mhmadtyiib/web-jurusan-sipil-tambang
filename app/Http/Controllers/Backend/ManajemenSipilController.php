<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ManajemenSipil;

class ManajemenSipilController extends Controller
{
    function index (){
        $data['list_manajemensipil'] = manajemensipil::all();

        return view('backend/manajemen-sipil.index', $data);
    }

    function store (){
       $manajemensipil = new ManajemenSipil();
       $manajemensipil->nama = request('nama');
       $manajemensipil->deskripsi = request('deskripsi');
       $manajemensipil->handleUploadManajemenSipil();
       $manajemensipil->save();

       return back();
    }

    function show(manajemensipil $manajemensipil)
    {
        $data['manajemensipil'] = $manajemensipil;
        return view('backend/manajemensipil.show', $data);
    }

    function edit(ManajemenSipil $id )
    {

        return view('backend/manajemensipil.edit', $id);
    }

    function aksiEdit($manajemensipil){

        $manajemensipil = ManajemenSipil::find($manajemensipil);
        $manajemensipil->nama = request('nama');
       $manajemensipil->deskripsi = request('deskripsi');
       $manajemensipil->handleUploadManajemenSipil();
       $manajemensipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($manajemensipil) {
        $manajemensipil = ManajemenSipil::find($manajemensipil);
        $manajemensipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
