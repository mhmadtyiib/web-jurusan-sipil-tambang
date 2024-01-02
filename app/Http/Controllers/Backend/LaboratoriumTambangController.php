<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\LaboratoriumTambang;

class LaboratoriumTambangController extends Controller
{
    function index (){
        $data['list_laboratoriumtambang'] = laboratoriumtambang::all();

        return view('backend/laboratorium-tambang.index', $data);
    }

    function store (){
       $laboratoriumtambang = new LaboratoriumTambang();
       $laboratoriumtambang->nama = request('nama');
       $laboratoriumtambang->deskripsi = request('deskripsi');
       $laboratoriumtambang->handleUploadLaboratoriumTambang();
       $laboratoriumtambang->save();

       return back();
    }

    function show(laboratoriumtambang $laboratoriumtambang)
    {
        $data['laboratoriumtambang'] = $laboratoriumtambang;
        return view('backend/laboratoriumtambang.show', $data);
    }

    function edit(LaboratoriumTambang $id )
    {

        return view('backend/laboratoriumtambang.edit', $id);
    }

    function aksiEdit($laboratoriumtambang){

        $laboratoriumtambang = Laboratoriumtambang::find($laboratoriumtambang);
        $laboratoriumtambang->nama = request('nama');
       $laboratoriumtambang->deskripsi = request('deskripsi');
       $laboratoriumtambang->handleUploadLaboratoriumTambang();
       $laboratoriumtambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($laboratoriumtambang) {
        $laboratoriumtambang = LaboratoriumTambang::find($laboratoriumtambang);
        $laboratoriumtambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
