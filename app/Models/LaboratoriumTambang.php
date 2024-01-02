<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LaboratoriumTambang extends Model
{
    protected $table = 'laboratorium_tambang';


    function handleUploadLaboratoriumTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "laboratoriumtambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteLaboratoriumTambang(){
        $laboratoriumtambang= $this->laboratoriumtambang;
        if($laboratoriumtambang){
            $path = public_path($laboratoriumtambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
