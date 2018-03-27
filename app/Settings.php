<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
/**
 * App\Settings
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Settings whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Settings whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Settings whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
