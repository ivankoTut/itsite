<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Settings extends Model
{

    public function get($key)
    {
        $i = Settings::where('key','=',$key)->get()->first();
        if(isset($i))
        {
            if(isset(Auth::user()->id) and Auth::user()->role==1)
            {
                return $i->name;
            }else
            {
                return $i->name;
            }

        }
        return '';
    }
    //
}
