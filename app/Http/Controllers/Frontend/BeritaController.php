<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller  
{
    public function berita() {
        $data['list_berita'] = Berita::all();
        return view('frontend.berita', $data); 
    }

    public function detailberita($berita) { 
        $data['berita'] = Berita::find($berita);
        $data['list_berita'] = Berita::all();
        return view('frontend.detail_berita', $data);
    }
}
