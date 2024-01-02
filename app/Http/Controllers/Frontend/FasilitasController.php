<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\LaboratoriumSipil;
use App\Models\LaboratoriumTambang;
use App\Models\ManajemenSipil;
use App\Models\ManajemenTambang;
use App\Models\RuangSipil;
use App\Models\RuangTambang;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function laboratoriumPertambangan()
    {
        $data['list_laboratorium_pertambangan'] = LaboratoriumTambang::all();
        return view('frontend.fasilitas.laboratorium_pertambangan', $data);
    }

    public function detailLaboratoriumPertambangan($laboratoriumtambang)
    {
        $data['laboratorium_pertambangan'] = LaboratoriumTambang::find($laboratoriumtambang);
        $data['list_laboratorium_pertambangan'] = LaboratoriumTambang::all();
        return view('frontend.detail_laboratorium_pertambangan', $data);
    }

    public function laboratoriumsipil()
    {
        $data['list_laboratorium_sipil'] = LaboratoriumSipil::all();
        return view('frontend.fasilitas.laboratorium_sipil', $data);
    }

    public function detailLaboratoriumSipil($laboratoriumsipil)
    {
        $data['laboratorium_sipil'] = LaboratoriumSipil::find($laboratoriumsipil);
        $data['list_laboratorium_sipil'] = LaboratoriumSipil::all();
        return view('frontend.detail_laboratorium_sipil', $data);
    }

     
    public function ruangkelaspertambangan()
    {
        $data['list_ruang_kelas_pertambangan'] = RuangTambang::all();
        return view('frontend.fasilitas.ruang_kelas_pertambangan', $data);
    }

    public function detailKelasPertambangan($ruangtambang)
    {       
        $data['ruang_kelas_pertambangan'] = RuangTambang::find($ruangtambang);
        $data['list_ruang_kelas_pertambangan'] = RuangTambang::all();
        return view('frontend.detail_kelas_pertambangan', $data);       
    }


    public function ruangkelassipil()
    {
        $data['list_ruang_kelas_sipil'] = RuangSipil::all();
        return view('frontend.fasilitas.ruang_kelas_sipil', $data);
    }

    public function detailKelasSipil($ruangsipil)
    {
        $data['ruang_kelas_sipil'] = RuangSipil::find($ruangsipil);
        $data['list_ruang_kelas_sipil'] = RuangSipil::all();
        return view('frontend.detail_kelas_sipil', $data);
    }

    public function ruangManajemenTambang()
    {
        $data['list_ruang_manajemen_tambang'] = ManajemenTambang::all();
        return view('frontend.fasilitas.ruang_manajemen_tambang', $data);
    }

    public function detailRuangTambang($manajementambang)
    {
        $data['ruang_manajemen_tambang'] = ManajemenTambang::find($manajementambang);
        $data['list_ruang_manajemen_tambang'] = ManajemenTambang::all();
        return view('frontend.detail_ruang_tambang', $data);
    }

    public function ruangManajemenSipil()
    {
        $data['list_ruang_manajemen_sipil'] = ManajemenSipil::all();
        return view('frontend.fasilitas.ruang_manajemen_sipil', $data);
    }

    public function detailRuangSipil($manajemensipil)
    {
        $data['ruang_manajemen_sipil'] = ManajemenSipil::find($manajemensipil);
        $data['list_ruang_manajemen_sipil'] = ManajemenSipil::all();
        return view('frontend.detail_ruang_sipil', $data);
    }

}
