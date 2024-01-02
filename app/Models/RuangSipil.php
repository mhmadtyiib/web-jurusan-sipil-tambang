<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RuangSipil extends Model
{
    protected $table = 'ruang_sipil';


    function handleUploadRuangSipil()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "ruangsipil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteRuangSipil(){
        $ruangsipil= $this->ruangsipil;
        if($ruangsipil){
            $path = public_path($ruangsipil);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
