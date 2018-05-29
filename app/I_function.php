<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\I_function
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $mifunctiondtl
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_function_dtl[] $m_i_function_dtls
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\I_function onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_function whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_function whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_function whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_function whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_function whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\I_function withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\I_function withoutTrashed()
 * @mixin \Eloquent
 */
class I_function extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function m_i_function_dtls()
    {
        return $this->belongsToMany('App\M_i_function_dtl')->withTimestamps();
    }

    public function getMifunctiondtlAttribute()
    {
        return $this->m_i_function_dtls->pluck('id')->all();
    }



}
