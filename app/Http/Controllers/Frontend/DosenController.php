<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DosenSipil;
use App\Models\DosenTambang;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosensipil() 
    {
        $data['list_dosen_sipil'] = DosenSipil::all();
        return view('frontend.profil.dosen_sipil', $data); 
    }

    public function dosentambang()
    {
        $data['list_dosen_pertambangan'] = DosenTambang::all();
        return view('frontend.profil.dosen_pertambangan', $data);
    }
}
