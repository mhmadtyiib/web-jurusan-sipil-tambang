<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AkreditasiSipil extends Model
{
    protected $table = 'akreditasi_sipil';


    function handleUploadAkreditasiSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "akreditasisipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteAkreditasiSipil(){
        $akreditasisipil= $this->akreditasisipil;
        if($akreditasisipil){
            $path = public_path($akreditasisipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
