<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TeknisiSipil;

class TeknisiSipilController extends Controller
{
    function index (){
        $data['list_teknisisipil'] = teknisisipil::all();

        return view('backend/teknisi-sipil.index', $data);
    }

    function store (){
       $teknisisipil = new TeknisiSipil();
       $teknisisipil->nama = request('nama');
       $teknisisipil->jabatan = request('jabatan');
       $teknisisipil->nidn = request('nidn');
       $teknisisipil->nip = request('nip');
       $teknisisipil->handleUploadTeknisiSipil();
       $teknisisipil->save();

       return back();
    }

    function show(teknisisipil $teknisisipil)
    {
        $data['teknisisipil'] = $teknisisipil;
        return view('backend/teknisisipil.show', $data);
    }

    function edit(TeknisiSipil $id )
    {

        return view('backend/teknisisipil.edit', $id);
    }

    function aksiEdit($teknisisipil){

        $teknisisipil = TeknisiSipil::find($teknisisipil);
        $teknisisipil->nama = request('nama');
       $teknisisipil->jabatan = request('jabatan');
       $teknisisipil->nidn = request('nidn');
       $teknisisipil->nip = request('nip');
       $teknisisipil->handleUploadTeknisiSipil();
       $teknisisipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($teknisisipil) {
        $teknisisipil = TeknisiSipil::find($teknisisipil);
        $teknisisipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
