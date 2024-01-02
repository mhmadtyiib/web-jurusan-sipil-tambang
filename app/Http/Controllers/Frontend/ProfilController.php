<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function profil()
    {
        
        return view('frontend.profil.pimpinan');
    }

    public function dosen_pertambangan()  
    {
        return view('frontend.profil.dosen_pertambangan');    
    }

    public function dosen_sipil() 
    {
        return view('frontend.profil.dosen_sipil');   
    }

    public function teknisi_pertambangan() 
    {
        return view('frontend.profil.teknisi_pertambangan');   
    }

    public function teknisi_sipil() 
    {
        return view('frontend.profil.teknisi_sipil');   
    }

    public function visi_misi_pertambangan() 
    {
        return view('frontend.profil.visi_misi_pertambangan');   
    }

    public function visi_misi_sipil() 
    {
        return view('frontend.profil.visi_misi_sipil');   
    }
}
