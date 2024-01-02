<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pimpinan;

class PimpinanController extends Controller
{
    function index (){
        $data['list_pimpinan'] = pimpinan::all();

        return view('backend/pimpinan.index', $data); 
    }

    function store (){
       $pimpinan = new Pimpinan();
       $pimpinan->nama = request('nama');
       $pimpinan->jabatan = request('jabatan');
       $pimpinan->nidn = request('nidn');
       $pimpinan->nip = request('nip');
       $pimpinan->handleUploadPimpinan();
       $pimpinan->save();

       return back();
    }

    function show(pimpinan $pimpinan)
    {
        $data['pimpinan'] = $pimpinan;
        return view('backend/pimpinan.show', $data);
    }

    function edit(Pimpinan $id )
    {

        return view('backend/pimpinan.edit', $id);
    }

    function aksiEdit($pimpinan){

        $pimpinan = Pimpinan::find($pimpinan);
        $pimpinan->nama = request('nama');
       $pimpinan->jabatan = request('jabatan');
       $pimpinan->nidn = request('nidn');
       $pimpinan->nip = request('nip');
       $pimpinan->handleUploadPimpinan();
       $pimpinan->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($pimpinan) {
        $pimpinan = Pimpinan::find($pimpinan);
        $pimpinan->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
