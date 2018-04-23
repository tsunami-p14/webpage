<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class M_i_category extends Model
{

    use SoftDeletes;
    //
    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'infor', 'sort_order'];

    public function m_i_category_dtls()
    {
        return $this->belongsToMany('App\M_i_category_dtl')->withTimestamps();
    }

    public function getMiCategorydtlAttribute()
    {
        return $this->m_i_category_dtls->pluck('id')->all();
    }



}
