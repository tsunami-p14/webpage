<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\M_shop
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_shop onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_shop whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_shop withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_shop withoutTrashed()
 * @mixin \Eloquent
 */
class M_shop extends Model
{
    //
    use SoftDeletes;
    //
    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];
}
