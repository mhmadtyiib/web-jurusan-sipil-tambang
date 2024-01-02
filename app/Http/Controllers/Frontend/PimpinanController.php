<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pimpinan;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    public function pimpinan(){
        $data['list_pimpinan'] = Pimpinan::all();
        return view('frontend.profil.pimpinan', $data);
    }
}
