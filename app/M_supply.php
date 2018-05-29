<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\M_supply
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_supply onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_supply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_supply withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_supply withoutTrashed()
 * @mixin \Eloquent
 */
class M_supply extends Model
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
    protected $fillable = ['name', 'infor'];
}
