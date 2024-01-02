<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\DosenSipil;

class DosenSipilController extends Controller
{
    function index (){
        $data['list_dosensipil'] = dosensipil::all();

        return view('backend/dosen-sipil.index', $data);
    }

    function store (){
       $dosensipil = new DosenSipil();
       $dosensipil->nama = request('nama');
       $dosensipil->jabatan = request('jabatan');
       $dosensipil->nidn = request('nidn');
       $dosensipil->nip = request('nip');
       $dosensipil->handleUploadDosenSipil();
       $dosensipil->save();

       return back();
    }

    function show(dosensipil $dosensipil)
    {
        $data['dosensipil'] = $dosensipil;
        return view('backend/dosensipil.show', $data);
    }

    function edit(DosenSipil $id )
    {

        return view('backend/dosensipil.edit', $id);
    }

    function aksiEdit($dosensipil){

        $dosensipil = DosenSipil::find($dosensipil);
        $dosensipil->nama = request('nama');
       $dosensipil->jabatan = request('jabatan');
       $dosensipil->nidn = request('nidn');
       $dosensipil->nip = request('nip');
       $dosensipil->handleUploadDosenSipil();
       $dosensipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($dosensipil) {
        $dosensipil = DosenSipil::find($dosensipil);
        $dosensipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
