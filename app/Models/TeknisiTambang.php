<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeknisiTambang extends Model
{
    protected $table = 'teknisi_tambang';


    function handleUploadTeknisiTambang()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "teknisitambang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDeleteTeknisiTambang(){
        $teknisitambang= $this->teknisitambang;
        if($teknisitambang){
            $path = public_path($teknisitambang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
