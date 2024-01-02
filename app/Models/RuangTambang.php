<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RuangTambang extends Model
{
    protected $table = 'ruang_tambang';


    function handleUploadRuangTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "ruangtambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteRuangTambang(){
        $ruangtambang= $this->ruangtambang;
        if($ruangtambang){
            $path = public_path($ruangtambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
