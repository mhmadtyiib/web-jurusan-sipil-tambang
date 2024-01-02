<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AkreditasiSipil;

class AkreditasiSipilController extends Controller
{
    function index (){
        $data['list_akreditasisipil'] = akreditasisipil::all();

        return view('backend/akreditasi-sipil.index', $data);
    }

    function store (){
       $akreditasisipil = new AkreditasiSipil();
       $akreditasisipil->keterangan= request('keterangan');
       $akreditasisipil->handleUploadAkreditasiSipil();
       $akreditasisipil->save();

       return back();
    }

    function show(akreditasisipil $akreditasisipil)
    {
        $data['akreditasisipil'] = $akreditasisipil;
        return view('backend/akreditasisipil.show', $data);
    }

    function edit(AkreditasiSipil $id )
    {

        return view('backend/akreditasisipil.edit', $id);
    }

    function aksiEdit($akreditasisipil){

        $akreditasisipil = AkreditasiSipil::find($akreditasisipil);
        $akreditasisipil->keterangan = request('keterangan');
       $akreditasisipil->handleUploadAkreditasiSipil();
       $akreditasisipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($akreditasisipil) {
        $akreditasisipil = AkreditasiSipil::find($akreditasisipil);
        $akreditasisipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
