<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MitemRequest extends FormRequest
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
            'typecode'=>'required',
            'm_maker_id'=>'required',
            'i_category_id'=>'required',
            'i_interface_id'=>'required',
            'i_function_id'=>'required',
            'scale_w'=>'required|numeric',
            'scale_d'=>'required|numeric',
            'scale_h'=>'required|numeric',
            'weight'=>'required|numeric',
        ];
    }
}
