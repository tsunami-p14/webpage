<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\I_quality_lvl
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $iqua_mqua
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_qlty_category[] $m_i_qlty_categories
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\I_quality_lvl onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_quality_lvl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_quality_lvl whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_quality_lvl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_quality_lvl whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_quality_lvl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\I_quality_lvl withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\I_quality_lvl withoutTrashed()
 * @mixin \Eloquent
 */
class I_quality_lvl extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function m_i_qlty_categories()
    {
        return $this->belongsToMany(M_i_qlty_category::class)->withTimestamps();
    }

    public function getIquaMquaAttribute()
    {
        return $this->m_i_qlty_categories->pluck('id')->all();
    }



}
