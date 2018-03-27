<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Note;
class Kategory extends Model
{
    //
    public function img()
    {
        $t=Note::where('kat','=',$this->id)->inRandomOrder()->take(1)->get()->first();
        if(isset($t))
        {
            return $t->randImg();
        }else
        {
            return 0;
        }

    }

    public function  getNotes()
    {
        $i=Note::where("kat","=",$this->id)->get();
        return $i;

    }

}
