<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LaboratoriumSipil extends Model
{
    protected $table = 'laboratorium_sipil';


    function handleUploadLaboratoriumSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "laboratoriumsipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteLaboratoriumSipil(){
        $laboratoriumsipil= $this->laboratoriumsipil;
        if($laboratoriumsipil){
            $path = public_path($laboratoriumsipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
