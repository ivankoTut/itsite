<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Files
 *
 * @property int $id
 * @property int|null $id_page
 * @property string $url
 * @property string|null $label
 * @property int $sort
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereIdPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Files whereUrl($value)
 * @mixin \Eloquent
 */
class Files extends Model
{
    //
}
