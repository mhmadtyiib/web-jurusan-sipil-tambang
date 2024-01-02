<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ManajemenTambang extends Model
{
    protected $table = 'manajemen_tambang';


    function handleUploadManajemenTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "manajementambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteManajemenTambang(){
        $manajementambang= $this->manajementambang;
        if($manajementambang){
            $path = public_path($manajementambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
