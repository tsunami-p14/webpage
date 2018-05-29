<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\M_i_qlty_category
 *
 * @property int $id
 * @property string $name
 * @property int $score
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_qlty_category onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_i_qlty_category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_qlty_category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_i_qlty_category withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\I_quality_lvl[] $i_quality_lvls
 */
class M_i_qlty_category extends Model
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
    protected $fillable = ['name', 'score'];

    public function i_quality_lvls()
    {
        return $this->belongsToMany(I_quality_lvl::class)->withTimestamps();
    }


}
