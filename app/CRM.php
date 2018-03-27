<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CRM
 *
 * @property int $id
 * @property string|null $date
 * @property int $kat
 * @property string|null $name
 * @property int $time
 * @property int $price
 * @property int|null $user
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereKat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CRM whereUser($value)
 * @mixin \Eloquent
 */
class CRM extends Model
{
    //
}
