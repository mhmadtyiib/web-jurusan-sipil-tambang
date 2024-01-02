<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\FotoController;
use App\Http\Controllers\Backend\PimpinanController;
use App\Http\Controllers\Backend\DosenSipilController;
use App\Http\Controllers\Backend\DosenTambangController;
use App\Http\Controllers\Backend\TeknisiSipilController;
use App\Http\Controllers\Backend\TeknisiTambangController;
use App\Http\Controllers\Backend\LaboratoriumSipilController;
use App\Http\Controllers\Backend\LaboratoriumTambangController;
use App\Http\Controllers\Backend\RuangSipilController;
use App\Http\Controllers\Backend\RuangTambangController;
use App\Http\Controllers\Backend\AkreditasiSipilController;
use App\Http\Controllers\Backend\AkreditasiTambangController;
use App\Http\Controllers\Backend\BeritaController;
use App\Http\Controllers\Backend\ManajemenSipilController;
use App\Http\Controllers\Backend\ManajemenTambangController;
use App\Http\Controllers\Backend\MisiTambangController;
use App\Http\Controllers\Backend\MisiSipilController;
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Routing\Events\RouteMatched;



Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [AdminController::class, 'index']);

    Route::controller(FotoController::class)->group(function () { 
        Route::get('foto',  'index');
        Route::get('foto/create', 'create');
        Route::post('foto/store',  'store');
        Route::get('foto/edit/{id}',  'edit');
        Route::post('foto/edit/{id}',  'aksiEdit');
        Route::get('foto/show/{foto}',  'show');
        Route::get('foto/delete/{foto}',  'destroy');
    });

    Route::controller(PimpinanController::class)->group(function () {
        Route::get('pimpinan', 'index');
        Route::get('pimpinan/create', 'create');
        Route::post('pimpinan', 'store');
        Route::get('pimpinan/edit/{id}', 'edit');
        Route::post('pimpinan/edit/{id}', 'aksiEdit');
        Route::get('pimpinan/show/{pimpinan}', 'show');
        Route::get('pimpinan/delete/{pimpinan}', 'destroy');
    });

    Route::controller(DosenSipilController::class)->group(function () {
        Route::get('dosensipil', 'index');
        Route::get('dosensipil/create', 'create');
        Route::post('dosensipil', 'store');
        Route::get('dosensipil/edit/{id}', 'edit');
        Route::post('dosensipil/edit/{id}', 'aksiEdit');
        Route::get('dosensipil/show/{dosensipil}', 'show');
        Route::get('dosensipil/delete/{dosensipil}', 'destroy');
    });

    Route::controller(DosenTambangController::class)->group(function () {
        Route::get('dosentambang', 'index');
        Route::get('dosentambang/create', 'create');
        Route::post('dosentambang', 'store');
        Route::get('dosentambang/edit/{id}', 'edit');
        Route::post('dosentambang/edit/{id}', 'aksiEdit');
        Route::get('dosentambang/show/{dosentambang}', 'show');
        Route::get('dosentambang/delete/{dosentambang}', 'destroy');
    }); 

    Route::controller(TeknisiSipilController::class)->group(function () {
        Route::get('teknisisipil', 'index');
        Route::get('teknisisipil/create', 'create');
        Route::post('teknisisipil', 'store');
        Route::get('teknisisipil/edit/{id}', 'edit');
        Route::post('teknisisipil/edit/{id}', 'aksiEdit');
        Route::get('teknisisipil/show/{teknisisipil}', 'show');
        Route::get('teknisisipil/delete/{teknisisipil}', 'destroy');
    });

    Route::controller(TeknisiTambangController::class)->group(function () {
        Route::get('teknisitambang', 'index');
        Route::get('teknisitambang/create', 'create');
        Route::post('teknisitambang', 'store');
        Route::get('teknisitambang/edit/{id}', 'edit');
        Route::post('teknisitambang/edit/{id}', 'aksiEdit');
        Route::get('teknisitambang/show/{teknisitambang}', 'show');
        Route::get('teknisitambang/delete/{teknisitambang}', 'destroy');
    });
    Route::controller(LaboratoriumSipilController::class)->group(function () {
        Route::get('laboratoriumsipil', 'index');
        Route::get('laboratoriumsipil/create', 'create');
        Route::post('laboratoriumsipil', 'store');
        Route::get('laboratoriumsipil/edit/{id}', 'edit');
        Route::post('laboratoriumsipil/edit/{id}', 'aksiEdit');
        Route::get('laboratoriumsipil/show/{laboratoriumsipil}', 'show');
        Route::get('laboratoriumsipil/delete/{laboratoriumsipil}', 'destroy');
    });

    Route::controller(LaboratoriumTambangController::class)->group(function () {
        Route::get('laboratoriumtambang', 'index');
        Route::get('laboratoriumtambang/create', 'create');
        Route::post('laboratoriumtambang', 'store');
        Route::get('laboratoriumtambang/edit/{id}', 'edit');
        Route::post('laboratoriumtambang/edit/{id}', 'aksiEdit');
        Route::get('laboratoriumtambang/show/{laboratoriumtambang}', 'show');
        Route::get('laboratoriumtambang/delete/{laboratoriumtambang}', 'destroy');
    });
    Route::controller(RuangSipilController::class)->group(function () {
        Route::get('ruangsipil', 'index');
        Route::get('ruangsipil/create', 'create');
        Route::post('ruangsipil', 'store');
        Route::get('ruangsipil/edit/{id}', 'edit');
        Route::post('ruangsipil/edit/{id}', 'aksiEdit');
        Route::get('ruangsipil/show/{ruangsipil}', 'show');
        Route::get('ruangsipil/delete/{ruangsipil}', 'destroy');
    });

    Route::controller(RuangTambangController::class)->group(function () {
        Route::get('ruangtambang', 'index');
        Route::get('ruangtambang/create', 'create');
        Route::post('ruangtambang', 'store');
        Route::get('ruangtambang/edit/{id}', 'edit');
        Route::post('ruangtambang/edit/{id}', 'aksiEdit');
        Route::get('ruangtambang/show/{ruangtambang}', 'show');
        Route::get('ruangtambang/delete/{ruangtambang}', 'destroy');
    });

    Route::controller(ManajemenSipilController::class)->group(function () {
        Route::get('manajemensipil', 'index');
        Route::get('manajemensipil/create', 'create');
        Route::post('manajemensipil', 'store');
        Route::get('manajemensipil/edit/{id}', 'edit');
        Route::post('manajemensipil/edit/{id}', 'aksiEdit');
        Route::get('manajemensipil/show/{manajemensipil}', 'show');
        Route::get('manajemensipil/delete/{manajemensipil}', 'destroy');
    });

    Route::controller(ManajemenTambangController::class)->group(function () {
        Route::get('manajementambang', 'index');
        Route::get('manajementambang/create', 'create');
        Route::post('manajementambang', 'store');
        Route::get('manajementambang/edit/{id}', 'edit');
        Route::post('manajementambang/edit/{id}', 'aksiEdit');
        Route::get('manajementambang/show/{manajementambang}', 'show');
        Route::get('manajementambang/delete/{manajementambang}', 'destroy');
    });

    Route::controller(AkreditasiSipilController::class)->group(function () { 
        Route::get('akreditasisipil', 'index');
        Route::get('akreditasisipil/create', 'create');
        Route::post('akreditasisipil', 'store');
        Route::get('akreditasisipil/edit/{id}', 'edit');
        Route::post('akreditasisipil/edit/{id}', 'aksiEdit');
        Route::get('akreditasisipil/show/{akreditasisipil}', 'show');
        Route::get('akreditasisipil/delete/{akreditasisipil}', 'destroy');
    });

    Route::controller(AkreditasiTambangController::class)->group(function () {
        Route::get('akreditasitambang', 'index');
        Route::get('akreditasitambang/create', 'create');
        Route::post('akreditasitambang', 'store');
        Route::get('akreditasitambang/edit/{id}', 'edit');
        Route::post('akreditasitambang/edit/{id}', 'aksiEdit');
        Route::get('akreditasitambang/show/{akreditasitambang}', 'show');
        Route::get('akreditasitambang/delete/{akreditasitambang}', 'destroy');
    });

    Route::controller(MisiSipilController::class)->group(function () {
        Route::get('misisipil', 'index');
        Route::get('misisipil/create', 'create');
        Route::post('misisipil', 'store');
        Route::get('misisipil/edit/{id}', 'edit');
        Route::post('misisipil/update/{id}', 'update');
        Route::get('misisipil/show/{misisipil}', 'show');
        Route::get('misisipil/delete/{misisipil}', 'destroy');
    });


    Route::controller(MisiTambangController::class)->group(function () {
        Route::get('misitambang', 'index');
        Route::get('misitambang/create', 'create');
        Route::post('misitambang', 'store');
        Route::get('misitambang/edit/{id}', 'edit');
        Route::post('misitambang/update/{id}', 'update');
        Route::get('misitambang/show/{misitambang}', 'show');
        Route::get('misitambang/delete/{misitambang}', 'destroy');
    });

    Route::controller(BeritaController::class)->group(function () {
        Route::get('berita', 'index');
        Route::get('berita/create', 'create');
        Route::post('berita/tambah', 'tambah');
        Route::get('berita/edit/{id}', 'edit');
        Route::post('berita/edit/{id}', 'aksiEdit');
        Route::get('berita/show/{berita}', 'show');
        Route::get('berita/delete/{berita}', 'destroy');
    });





});