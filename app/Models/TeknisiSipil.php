<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeknisiSipil extends Model
{
    protected $table = 'teknisi_sipil';


    function handleUploadTeknisiSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "teknisisipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteTeknisiSipil(){
        $teknisisipil= $this->teknisisipil;
        if($teknisisipil){
            $path = public_path($teknisisipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
