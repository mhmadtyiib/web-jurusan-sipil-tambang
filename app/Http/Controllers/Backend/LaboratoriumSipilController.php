<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\LaboratoriumSipil;

class LaboratoriumSipilController extends Controller
{
    function index (){
        $data['list_laboratoriumsipil'] = laboratoriumsipil::all();

        return view('backend/laboratorium-sipil.index', $data);
    }

    function store (){
       $laboratoriumsipil = new LaboratoriumSipil();
       $laboratoriumsipil->nama = request('nama');
       $laboratoriumsipil->deskripsi = request('deskripsi');
       $laboratoriumsipil->handleUploadLaboratoriumSipil();
       $laboratoriumsipil->save();

       return back();
    }

    function show(laboratoriumsipil $laboratoriumsipil)
    {
        $data['laboratoriumsipil'] = $laboratoriumsipil;
        return view('backend/laboratoriumsipil.show', $data);
    }

    function edit(LaboratoriumSipil $id )
    {

        return view('backend/laboratoriumsipil.edit', $id);
    }

    function aksiEdit($laboratoriumsipil){

        $laboratoriumsipil = LaboratoriumSipil::find($laboratoriumsipil);
        $laboratoriumsipil->nama = request('nama');
       $laboratoriumsipil->deskripsi = request('deskripsi');
       $laboratoriumsipil->handleUploadLaboratoriumSipil();
       $laboratoriumsipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($laboratoriumsipil) {
        $laboratoriumsipil = LaboratoriumSipil::find($laboratoriumsipil);
        $laboratoriumsipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
