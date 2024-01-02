<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DosenSipil extends Model
{
    protected $table = 'dosen_sipil';


    function handleUploadDosenSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "dosensipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteDosenSipil(){
        $dosensipil= $this->dosensipil;
        if($dosensipil){
            $path = public_path($dosensipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
