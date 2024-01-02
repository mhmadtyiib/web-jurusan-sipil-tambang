<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeknisiSipil;
use App\Models\TeknisiTambang;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    public function teknisisipil()
    {
        $data['list_teknisi_sipil'] = TeknisiSipil::all();
        return view('frontend.profil.teknisi_sipil', $data);
    }

    public function teknisitambang() 
    {
        $data['list_teknisi_pertambangan'] = TeknisiTambang::all();
        return view('frontend.profil.teknisi_pertambangan', $data);
    }
}
