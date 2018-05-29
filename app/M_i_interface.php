<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\m_i_interface
 *
 * @property int $id
 * @property string $name
 * @property string $infor
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\m_i_interface onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereInfor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\m_i_interface whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\m_i_interface withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\m_i_interface withoutTrashed()
 * @mixin \Eloquent
 */
class m_i_interface extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'infor', 'sort_order'];
}
