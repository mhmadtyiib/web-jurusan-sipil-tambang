<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\RuangSipil;

class RuangSipilController extends Controller
{
    function index (){
        $data['list_ruangsipil'] = ruangsipil::all();

        return view('backend/ruang-sipil.index', $data);
    }

    function store (){
       $ruangsipil = new RuangSipil();
       $ruangsipil->nama = request('nama');
       $ruangsipil->deskripsi = request('deskripsi');
       $ruangsipil->handleUploadRuangSipil();
       $ruangsipil->save();

       return back();
    }

    function show(ruangsipil $ruangsipil)
    {
        $data['ruangsipil'] = $ruangsipil;
        return view('backend/ruangsipil.show', $data);
    }

    function edit(RuangSipil $id )
    {

        return view('backend/ruangsipil.edit', $id);
    }

    function aksiEdit($ruangsipil){

        $ruangsipil = RuangSipil::find($ruangsipil);
        $ruangsipil->nama = request('nama');
       $ruangsipil->deskripsi = request('deskripsi');
       $ruangsipil->handleUploadRuangSipil();
       $ruangsipil->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($ruangsipil) {
        $ruangsipil = RuangSipil::find($ruangsipil);
        $ruangsipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
