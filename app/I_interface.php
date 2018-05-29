<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\I_interface
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $miinterface
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\m_i_interface[] $m_i_interfaces
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\I_interface onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_interface whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_interface whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_interface whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_interface whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_interface whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\I_interface withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\I_interface withoutTrashed()
 * @mixin \Eloquent
 */
class I_interface extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function m_i_interfaces()
    {
        return $this->belongsToMany('App\M_i_interface')->withTimestamps();
    }

    public function getMiinterfaceAttribute()
    {
        return $this->m_i_interfaces->pluck('id')->all();
    }
}
