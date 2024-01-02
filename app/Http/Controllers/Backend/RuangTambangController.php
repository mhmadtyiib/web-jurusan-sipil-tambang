<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\RuangTambang;

class RuangTambangController extends Controller
{
    function index (){
        $data['list_ruangtambang'] = ruangtambang::all();

        return view('backend/ruang-tambang.index', $data);
    }

    function store (){
       $ruangtambang = new RuangTambang();
       $ruangtambang->nama = request('nama');
       $ruangtambang->deskripsi = request('deskripsi');
       $ruangtambang->handleUploadRuangTambang();
       $ruangtambang->save();

       return back();
    }

    function show(ruangtambang $ruangtambang)
    {
        $data['ruangtambang'] = $ruangtambang;
        return view('backend/ruangtambang.show', $data);
    }

    function edit(RuangTambang $id )
    {

        return view('backend/ruangtambang.edit', $id);
    }

    function aksiEdit($ruangtambang){

        $ruangtambang = ruangtambang::find($ruangtambang);
        $ruangtambang->nama = request('nama');
       $ruangtambang->deskripsi = request('deskripsi');
       $ruangtambang->handleUploadruangtambang();
       $ruangtambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($ruangtambang) {
        $ruangtambang = RuangTambang::find($ruangtambang);
        $ruangtambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
