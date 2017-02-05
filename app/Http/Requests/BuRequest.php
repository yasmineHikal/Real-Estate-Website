<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BuRequest extends Request
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
            'bu_name'=> 'required|min:5',
            'bu_price'=> 'required|min:5',
           'bu_rent'=> 'required|integer',
              'bu_square'=> 'required|min:5|max:10',
             'bu_type'=> 'required',
             'bu_small_dis'=> 'required|min:5|max:160',
             'bu_meta'=> 'required|min:5',
            'bu_langtiude'=> 'required',
              'bu_latitude'=> 'required' ,
              'bu_large_dis'=> 'required|min:5',
              'bu_status'=> 'required'

        ];
    }
}
