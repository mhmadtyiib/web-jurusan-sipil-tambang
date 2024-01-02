<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Foto extends Model
{
    protected $table = 'foto';


    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "slide";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteFoto(){
        $foto= $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
