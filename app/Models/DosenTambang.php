<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DosenTambang extends Model
{
    protected $table = 'dosen_tambang';


    function handleUploadDosenTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "dosentambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteDosenTambang(){
        $dosentambang= $this->dosentambang;
        if($dosentambang){
            $path = public_path($dosentambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
