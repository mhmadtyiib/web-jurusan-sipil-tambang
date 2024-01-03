<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Foto;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda() 
    {
        $data['list_foto'] = Foto::paginate(6);
        $data['list_berita'] = Berita::all();
        return view('frontend.base', $data); 
    }

}
