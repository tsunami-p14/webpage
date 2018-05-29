<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\M_i_category_dtl
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_category[] $m_i_categories
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category_dtl onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category_dtl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category_dtl withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category_dtl withoutTrashed()
 * @mixin \Eloquent
 */
class M_i_category_dtl extends Model
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

    public function m_i_categories()
    {
        return $this->belongsToMany('App\M_i_category')->withTimestamps();
    }


}
