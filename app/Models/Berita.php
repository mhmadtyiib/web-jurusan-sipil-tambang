<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'berita';


    function handleUploadBerita()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteBerita(){
        $berita= $this->berita;
        if($berita){
            $path = public_path($berita);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
