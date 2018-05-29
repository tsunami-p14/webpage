<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\M_item;
use App\I_supply;

/**
 * App\Item
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\I_supply[] $i_supplies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_i_qlty_category[] $m_i_qlty_categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_item[] $m_items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\M_shop[] $m_shops
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Item onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Item withoutTrashed()
 * @mixin \Eloquent
 * @property-read mixed $shop_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\I_quality_lvl[] $i_quality_lvls
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Stock[] $stocks
 */
class Item extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'infor',
    ];

    public function m_items()
    {
        return $this->belongsToMany(M_item::class)->withTimestamps();
    }

    public function m_shops()
    {
        return $this->belongsToMany(M_shop::class)->withTimestamps();
    }

    public function m_i_qlty_categories()
    {
        return $this->belongsToMany(M_i_qlty_category::class)->withTimestamps();
    }

    public function i_quality_lvls()
    {
        return $this->belongsToMany(I_quality_lvl::class,'i_quality_lvl_item')->withTimestamps();
    }

    public function i_supplies()
    {
        return $this->belongsToMany(I_supply::class)->withTimestamps();
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class)->withTimestamps();
    }


    public function getShopListAttribute()
    {
        return $this->m_shops()->pluck('id')->all();
    }


//    public function getIqLvlAttribute()
//    {
//        return $this->i_quality_lvls()->pluck('id')->all();
//    }
//
//    public function getMiQcAttribute()
//    {
//        return $this->m_i_qlty_categories()->pluck('id')->all();
//    }

}
