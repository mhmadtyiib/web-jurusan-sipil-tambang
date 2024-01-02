<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;

class BeritaController extends Controller
{
    function index (){
        $data['list_berita'] = berita::all();

        return view('backend/berita.index', $data);
    }

    function tambah (){
       $berita = new Berita();
       $berita->keterangan = request('keterangan');
       $berita->deskripsi = request('deskripsi');
       $berita->handleUploadBerita();
       $berita->save();

       return back();
    }

    function show(berita $berita)
    {
        $data['berita'] = $berita;
        return view('backend/berita.show', $data);
    }

    function edit(Berita $id )
    {

        return view('backend/berita.edit', $id);
    }

    function aksiEdit($berita){

        $berita = Berita::find($berita);
        $berita->keterangan = request('keterangan');
       $berita->deskripsi = request('deskripsi');
       $berita->handleUploadBerita();
       $berita->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }

    public function destroy($berita) {
        $berita = Berita::find($berita);
        $berita->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
