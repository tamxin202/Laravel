<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required |max:255|string',
            'age' =>'numeric',
            'date' =>'string',
            'phone' =>'numeric',
            'web' =>'string',
            'address' =>'string',
            //
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>'Vui long dien dung ten ',
            'age.numeric'=>'Vui long dien dung tuoi ',
            'date.string'=>'Vui long dien dung thoi gian ',
            'phone.numeric'=>'Vui long dien lai so dien thoai ',
            'web.string'=>'Vui long liem tra lai ky tu ',
            'address.string'=>'Vui long dien lai dia chi ',
        ];
    }
}
