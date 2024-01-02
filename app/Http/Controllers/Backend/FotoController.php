<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Foto;

class FotoController extends Controller
{
    function index (){
        $data['list_foto'] = foto::all();

        return view('backend.foto.index', $data); 
    }

    function store (){
       $slide = new Foto;
       $slide->handleUploadFoto();
       $slide->save();

       return back();
    }

    function show(foto $foto)
    {
        $data['foto'] = $foto;
        return view('backend.foto.show', $data);
    }

    function edit(Foto $id )
    {

        return view('foto.edit', $id);
    }

    function aksiEdit(Request $request, Foto $id){



        $hapusFileLama = $id->handleDeleteFoto();

        if($hapusFileLama){
            $id->handleUploadFoto();
            $id->update();
            return back()->with('success', 'Data berhasil diupdate !');
        }else{
            return back()->with('danger', 'Data gagal diupdate !');
        }

    }

    public function destroy($foto) {
        $foto = Foto::find($foto);
        $foto->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
