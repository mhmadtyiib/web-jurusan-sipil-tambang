<?php

use App\Http\Controllers\Frontend\PimpinanController;
use App\Http\Controllers\Frontend\ProfilController;
use App\Http\Controllers\Frontend\AkreditasiController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\DosenController;
use App\Http\Controllers\Frontend\FasilitasController;
use App\Http\Controllers\Frontend\TeknisiController;
use App\Http\Controllers\Frontend\VisiMisiController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.base'); 
});


Route::get('frontend/kontak', function () { 
    return view('frontend.kontak');
});



Route::get('/', [BerandaController::class, 'beranda']); 


Route::get('frontend/pimpinan', [PimpinanController::class, 'pimpinan']);

Route::get('frontend/berita', [BeritaController::class, 'berita']);
Route::get('frontend/detail_berita/{berita}', [BeritaController::class, 'detailberita']);


Route::get('frontend/akreditasi_sipil', [AkreditasiController::class, 'akreditasisipil']);
Route::get('frontend/akreditasi_pertambangan', [AkreditasiController::class, 'akreditasitambang']);

Route::get('frontend/dosen_pertambangan', [DosenController::class, 'dosentambang']);
Route::get('frontend/dosen_sipil', [DosenController::class, 'dosensipil']);

Route::get('frontend/teknisi_pertambangan', [TeknisiController::class, 'teknisitambang']);
Route::get('frontend/teknisi_sipil', [TeknisiController::class, 'teknisisipil']);

Route::get('frontend/visi_misi_pertambangan', [VisiMisiController::class, 'visimisitambang']);
Route::get('frontend/visi_misi_sipil', [VisiMisiController::class, 'visimisisipil']);

Route::get('frontend/laboratorium_pertambangan', [FasilitasController::class, 'LaboratoriumPertambangan']);
Route::get('frontend/detail_laboratorium_pertambangan/{laboratorium_pertambangan}', [FasilitasController::class, 'detailLaboratoriumPertambangan']);

Route::get('frontend/laboratorium_sipil', [FasilitasController::class, 'laboratoriumsipil']);
Route::get('frontend/detail_laboratorium_sipil/{laboratorium_sipil}', [FasilitasController::class, 'detailLaboratoriumSipil']);

Route::get('frontend/ruang_kelas_pertambangan', [FasilitasController::class, 'ruangkelaspertambangan']);
Route::get('frontend/detail_kelas_pertambangan/{ruang_kelas_pertambangan}', [FasilitasController::class, 'detailKelasPertambangan']);

Route::get('frontend/ruang_kelas_sipil', [FasilitasController::class, 'ruangkelassipil']);
Route::get('frontend/detail_kelas_sipil/{ruang_kelas_sipil}', [FasilitasController::class, 'detailKelasSipil']);

Route::get('frontend/ruang_manajemen_tambang', [FasilitasController::class, 'ruangManajemenTambang']);
Route::get('frontend/detail_ruang_tambang/{ruang_manajemen_tambang}', [FasilitasController::class, 'detailRuangTambang']);

Route::get('frontend/ruang_manajemen_sipil', [FasilitasController::class, 'ruangManajemenSipil']);
Route::get('frontend/detail_ruang_sipil/{ruang_manajemen_sipil}', [FasilitasController::class, 'detailRuangSipil']);
