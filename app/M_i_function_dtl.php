<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\M_i_function_dtl
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_function_dtl onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_function_dtl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_function_dtl withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_function_dtl withoutTrashed()
 * @mixin \Eloquent
 */
class M_i_function_dtl extends Model
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
