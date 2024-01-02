<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AkreditasiTambang;

class AkreditasiTambangController extends Controller
{
    function index (){
        $data['list_akreditasitambang'] = akreditasitambang::all();

        return view('backend/akreditasi-tambang.index', $data);
    }

    function store (){
       $akreditasitambang = new AkreditasiTambang();
       $akreditasitambang->keterangan= request('keterangan');
       $akreditasitambang->handleUploadAkreditasiTambang();
       $akreditasitambang->save();

       return back();
    }

    function show(akreditasitambang $akreditasitambang)
    {
        $data['akreditasitambang'] = $akreditasitambang;
        return view('backend/akreditasitambang.show', $data);
    }

    function edit(AkreditasiTambang $id )
    {

        return view('backend/akreditasitambang.edit', $id);
    }

    function aksiEdit($akreditasitambang){

        $akreditasitambang = AkreditasiTambang::find($akreditasitambang);
        $akreditasitambang->keterangan = request('keterangan');
       $akreditasitambang->handleUploadAkreditasiTambang();
       $akreditasitambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($akreditasitambang) {
        $akreditasitambang = AkreditasiTambang::find($akreditasitambang);
        $akreditasitambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
