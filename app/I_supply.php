<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\I_supply
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\I_supply onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_supply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_supply whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_supply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_supply whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\I_supply whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\I_supply withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\I_supply withoutTrashed()
 * @mixin \Eloquent
 * @property-read mixed $ispply_mspply
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_supply[] $m_supplies
 */
class I_supply extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function m_supplies()
    {
        return $this->belongsToMany(M_supply::class)->withTimestamps();
    }

    public function getIspplyMspplyAttribute()
    {
        return $this->m_supplies->pluck('id')->all();
    }


}
