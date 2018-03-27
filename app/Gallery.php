<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Gallery
 *
 * @property int $id
 * @property string $name
 * @property string|null $text
 * @property string|null $url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUrl($value)
 * @mixin \Eloquent
 */
class Gallery extends Model
{
    public function getImgs()
    {
        $i=Image::where("id_gallery","=",$this->id)->get();
        return $i;
    }
    //
}
