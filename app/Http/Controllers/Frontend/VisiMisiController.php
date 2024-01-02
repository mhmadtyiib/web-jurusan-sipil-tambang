<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MisiSipil;
use App\Models\MisiTambang;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function visimisisipil()
    {
        $data['list_visi_misi_sipil'] = MisiSipil::all();
        return view('frontend.profil.visi_misi_sipil', $data);
    }

    public function visimisitambang()
    {
        $data['list_visi_misi_pertambangan'] = MisiTambang::all();
        return view('frontend.profil.visi_misi_pertambangan', $data);
    }
}
