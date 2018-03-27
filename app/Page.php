<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property int $id
 * @property string|null $url
 * @property string|null $label
 * @property string $text
 * @property int $sort
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUrl($value)
 * @mixin \Eloquent
 */
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
