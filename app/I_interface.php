<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class I_interface extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function m_i_interfaces()
    {
        return $this->belongsToMany('App\M_i_interface')->withTimestamps();
    }

    public function getMiinterfaceAttribute()
    {
        return $this->m_i_interfaces->pluck('id')->all();
    }
}
