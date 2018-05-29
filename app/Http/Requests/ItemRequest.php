<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'm_item_id'=>'required',
            'name'=>'required',
            'infor'=>'required',
            'i_supply_id'=>'required',
            'shop_list'=>'required',
            'i_quality_lvl_id'=>'required',
            'm_i_qlty_category_id'=>'required',
        ];
    }
}
