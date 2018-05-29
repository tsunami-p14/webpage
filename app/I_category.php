<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\I_category
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read mixed $mi_category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_category[] $m_i_categories
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\I_category onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\I_category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\I_category withoutTrashed()
 * @mixin \Eloquent
 */
class I_category extends Model
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

    public function m_i_categories()
    {
//        return $this->belongsToMany('App\m_i_category_dtl')->withTimestamps()->withPivot('i_category_id');
//        return $this->hasMany( 'App\m_i_category');
//        return $this->belongsToMany('App\m_i_category','m_i_category_m_i_category_dtl')->withTimestamps()->withPivot('m_i_category_dtl_id');
        return $this->belongsToMany('App\M_i_category')->withTimestamps();
    }

    public function getMiCategoryAttribute()
    {
        return $this->m_i_categories->pluck('id')->all();
    }


}
