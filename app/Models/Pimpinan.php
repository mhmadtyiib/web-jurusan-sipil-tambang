<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pimpinan extends Model
{
    protected $table = 'pimpinan';


    function handleUploadPimpinan()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "pimpinan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeletePimpinan(){
        $pimpinan= $this->pimpinan;
        if($pimpinan){
            $path = public_path($pimpinan);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
