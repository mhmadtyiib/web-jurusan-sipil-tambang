<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ManajemenSipil extends Model
{
    protected $table = 'manajemen_sipil';


    function handleUploadManajemenSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "manajemensipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteManajemenSipil(){
        $manajemensipil= $this->manajemensipil;
        if($manajemensipil){
            $path = public_path($manajemensipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
