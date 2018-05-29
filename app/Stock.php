<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Stock
 *
 * @property int $id
 * @property string $serial
 * @property int $selflg
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Stock onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereSelflg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stock withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Stock withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Location[] $locations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shelf[] $shelves
 */
class Stock extends Model
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
    protected $fillable = ['serial','selflg'];

    public function shelves()
    {
        return $this->belongsToMany(Shelf::class)->withTimestamps();
    }

    public  function locations()
    {
        return $this->belongsToMany(Location::class)->withTimestamps();
    }

    public  function items()
    {
        return $this->belongsToMany(Item::class)->withTimestamps();
    }


}
