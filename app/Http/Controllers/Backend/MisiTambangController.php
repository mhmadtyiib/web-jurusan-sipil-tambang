<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MisiTambang;

class MisiTambangController extends Controller
{
    function index (){
        $data['list_misitambang'] = misitambang::all();


        return view('backend/misi-tambang.index', $data);
    }

    function create ()
    {
        return view('backend/misi-tambang.create');
    }

    function store ()
    {
        $misitambang = new MisiTambang;
        $misitambang->deskripsi = request('deskripsi');
        $misitambang->jenis = request('jenis');       
        $misitambang->save();

        return redirect('admin/misitambang');
    }

    function show(MisiTambang $misitambang)
    {
        $data['misitambang'] = $misitambang;
        return view('backend/misi-tambang.show', $data);
    }

    function edit($misitambang)
    {
        $data['misitambang'] = MisiTambang::find($misitambang);
        return view('backend/misi-tambang.edit', $data);
    }

    public function destroy($misitambang) {
        $misitambang = MisiTambang::find($misitambang);
        $misitambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }

    function update($misitambang)
    {
        $misitambang = MisiTambang::find($misitambang);
        $misitambang->deskripsi = request('deskripsi');
        $misitambang->jenis = request('jenis');
        $misitambang->save();

        return redirect('admin/misitambang');
    }
}
