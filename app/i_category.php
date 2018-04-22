<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class i_category extends Model
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
    protected $fillable = ['name'];

    public function m_i_categories()
    {
//        return $this->belongsToMany('App\m_i_category_dtl')->withTimestamps()->withPivot('i_category_id');
//        return $this->hasMany( 'App\m_i_category');
//        return $this->belongsToMany('App\m_i_category','m_i_category_m_i_category_dtl')->withTimestamps()->withPivot('m_i_category_dtl_id');
        return $this->belongsToMany('App\m_i_category')->withTimestamps();
    }

    public function getMiCategoryAttribute()
    {
        return $this->m_i_categories->pluck('id')->all();
    }


}
