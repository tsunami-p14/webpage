<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\M_maker;
use App\I_category;
use App\I_interface;
use App\I_function;

/**
 * App\M_item
 *
 * @property int $id
 * @property string $typecode
 * @property float $scale_w
 * @property float $scale_d
 * @property float $scale_h
 * @property float $weight
 * @property int $m_maker_id
 * @property int $i_category_id
 * @property int $i_interface_id
 * @property int $i_function_id
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $mmakers_list
 * @property-read \App\I_category $i_categories
 * @property-read \App\I_function $i_functions
 * @property-read \App\I_interface $i_interfaces
 * @property-read \App\M_maker $m_makers
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\M_item onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereICategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereIFunctionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereIInterfaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereMMakerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereScaleD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereScaleH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereScaleW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereTypecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\M_item whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\App\M_item withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\M_item withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 */
class M_item extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'typecode',
        'scale_w',
        'scale_d',
        'scale_h',
        'weight',
        'm_maker_id',
        'i_category_id',
        'i_interface_id',
        'i_function_id'
    ];

    public function m_makers(){
        return $this->belongsTo(M_maker::class,'m_maker_id');
    }
    public function i_categories(){
        return $this->belongsTo('App\I_category','i_category_id');
    }
    public function i_interfaces(){
        return $this->belongsTo('App\I_interface','i_interface_id');
    }
    public function i_functions(){
        return $this->belongsTo('App\I_function','i_function_id');
    }
    public function items(){
        return $this->belongsToMany(Item::class)->withTimestamps();
    }

    public function getMmakersListAttribute()
    {
//        dd($this->m_makers()->pluck('name')->all());
//        下、これでID引っ張ってこれてるっぽいが・・・
        return $this->m_makers()->pluck('id')->all();
    }


}
