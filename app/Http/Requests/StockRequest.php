<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
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

        if($this->id){
            $unique='unique:stocks,serial,'.$this->id.',id' ;
        }else{
            $unique='unique:stocks,serial';
        }

//        $unique='unique:stocks,serial';


        return [
            //
            'serial'=>'required|'.$unique ,
//            'selflg'=>'required',
            'shelf_id'=>'required',
            'location_id'=>'required',
        ];
    }
}
