<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\M_i_category
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property int $sort_order
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read mixed $mi_categorydtl
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_category_dtl[] $m_i_category_dtls
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_category withoutTrashed()
 * @mixin \Eloquent
 */
class M_i_category extends Model
{

    use SoftDeletes;
    //
    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'infor', 'sort_order'];

    public function m_i_category_dtls()
    {
        return $this->belongsToMany('App\M_i_category_dtl')->withTimestamps();
    }

    public function getMiCategorydtlAttribute()
    {
        return $this->m_i_category_dtls->pluck('id')->all();
    }



}
