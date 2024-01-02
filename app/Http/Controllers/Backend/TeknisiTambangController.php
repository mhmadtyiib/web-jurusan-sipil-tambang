<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TeknisiTambang;

class TeknisiTambangController extends Controller
{
    function index (){
        $data['list_teknisitambang'] = teknisitambang::all();

        return view('backend/teknisi-tambang.index', $data);
    }

    function store (){
       $teknisitambang = new TeknisiTambang();
       $teknisitambang->nama = request('nama');
       $teknisitambang->jabatan = request('jabatan');
       $teknisitambang->nidn = request('nidn');
       $teknisitambang->nip = request('nip');
       $teknisitambang->handleUploadTeknisiTambang();
       $teknisitambang->save();

       return back();
    }

    function show(teknisitambang $teknisitambang)
    {
        $data['teknisitambang'] = $teknisitambang;
        return view('backend/teknisitambang.show', $data);
    }

    function edit(TeknisiTambang $id )
    {

        return view('backend/teknisitambang.edit', $id);
    }

    function aksiEdit($teknisitambang){

        $teknisitambang = TeknisiTambang::find($teknisitambang);
        $teknisitambang->nama = request('nama');
       $teknisitambang->jabatan = request('jabatan');
       $teknisitambang->nidn = request('nidn');
       $teknisitambang->nip = request('nip');
       $teknisitambang->handleUploadTeknisiTambang();
       $teknisitambang->save();

       return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($teknisitambang) {
        $teknisitambang = TeknisiTambang::find($teknisitambang);
        $teknisitambang->delete();

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
