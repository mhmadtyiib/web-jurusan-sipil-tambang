<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiSipil;
use App\Models\AkreditasiTambang;
use Illuminate\Http\Request;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function akreditasisipil()
    {
        $data['list_akreditasi_sipil'] = AkreditasiSipil::all();
        return view('frontend.akreditasi.akreditasi_sipil', $data);
    }

    public function akreditasitambang()
    {
        $data['list_akreditasi_pertambangan'] = AkreditasiTambang::all();
        return view('frontend.akreditasi.akreditasi_pertambangan', $data);
    }
    

}    