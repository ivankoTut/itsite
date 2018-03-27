<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function getImgs()
    {
        $i=Image::where("id_gallery","=",$this->id)->get();
        return $i;
    }
    //
}
