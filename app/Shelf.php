<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Shelf
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $location_shelf
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Location[] $locations
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Shelf onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shelf whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Shelf withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Shelf withoutTrashed()
 * @mixin \Eloquent
 */
class Shelf extends Model
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

    public function locations()
    {
        return $this->belongsToMany(Location::class)->withTimestamps();

    }

    public function getLocationShelfAttribute()
    {
        return $this->locations->pluck('id')->all();
    }

}
