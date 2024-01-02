<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AkreditasiTambang extends Model
{
    protected $table = 'akreditasi_tambang';


    function handleUploadAkreditasiTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "akreditasitambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteAkreditasiTambang(){
        $akreditasitambang= $this->akreditasitambang;
        if($akreditasitambang){
            $path = public_path($akreditasitambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
