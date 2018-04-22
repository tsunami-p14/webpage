<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class m_i_category_dtl extends Model
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
        return $this->belongsToMany('App\m_i_category')->withTimestamps();
    }


}
