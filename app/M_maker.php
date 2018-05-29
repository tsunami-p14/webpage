<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\M_maker
 *
 * @property int $id
 * @property string $name
 * @property string $name_a
 * @property string $infor
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_maker onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereNameA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_maker whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_maker withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_maker withoutTrashed()
 * @mixin \Eloquent
 */
class M_maker extends Model
{

    use SoftDeletes;
    //
    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'name_a', 'infor'];



}
