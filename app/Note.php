<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

/**
 * App\Note
 *
 * @property int $id
 * @property int $kat
 * @property string $url
 * @property string $label
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereKat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereUrl($value)
 * @mixin \Eloquent
 */
class Note extends Model
{

    public function getRouteKeyName()
    {
        return 'url';
    }

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
