<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Note;
/**
 * App\Kategory
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategory whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Kategory extends Model
{

    public function getRouteKeyName()
    {
        return 'key';
    }

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
