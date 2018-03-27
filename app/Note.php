<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Note extends Model
{
    public function getOneImage()
    {
        $i=Image::where("ID_NOTE","=",$this->id)->get()->first();
        if(!isset($i)) return '';
        return $i->url;

    }
    public function getImgs()
    {
        $i=Image::where("ID_NOTE","=",$this->id)->get();
        return $i;

    }
    public function randImg()
    {
        $i=Image::where("ID_NOTE","=",$this->id)->inRandomOrder()->get()->first();
        if(!isset($i)) return '';
        return $i->url;
    }
}
