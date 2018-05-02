<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\M_maker;
use App\I_category;
use App\I_interface;
use App\I_function;

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



    public function getMmakersAttribute()
    {
        return $this->m_makers->pluck('id')->all();
    }


}
