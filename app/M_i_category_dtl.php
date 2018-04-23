<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_i_category_dtl extends Model
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

    public function m_i_categories()
    {
        return $this->belongsToMany('App\M_i_category')->withTimestamps();
    }


}
