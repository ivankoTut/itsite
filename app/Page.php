<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function files()
    {
        $i=Files::where("id_page","=",$this->id)->get();
        if(isset($i)){
            return $i;
        }
        return;

    }
    //
}
