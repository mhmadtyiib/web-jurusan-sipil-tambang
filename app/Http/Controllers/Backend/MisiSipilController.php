<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MisiSipil;

class MisiSipilController extends Controller
{
    function index (){
        $data['list_misisipil'] = misisipil::all();


        return view('backend.misi-sipil.index', $data);
    }

    function create ()
    {
        return view('backend.misi-sipil.create');
    }

    function store ()
    {
        $misisipil = new MisiSipil;
        $misisipil->deskripsi = request('deskripsi');
        $misisipil->jenis = request('jenis');
        $misisipil->save();

        return redirect('admin/misisipil');
    }

    function show(MisiSipil $misisipil)
    {
        $data['misisipil'] = $misisipil;
        return view('backend.misi-sipil.show', $data);
    }

    function edit($misisipil)
    {
        $data['misisipil'] = MisiSipil::find($misisipil);
        return view('backend.misi-sipil.edit', $data);
    }

    public function destroy($misisipil) {
        $misisipil = MisiSipil::find($misisipil);
        $misisipil->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }

    function update($misisipil)
    {
        $misisipil = MisiSipil::find($misisipil);
        $misisipil->deskripsi = request('deskripsi');
        $misisipil->jenis = request('jenis');
        $misisipil->save();

        return redirect('admin/misisipil');
    }
}
