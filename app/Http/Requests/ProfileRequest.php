<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
    public function messages()
    {
        return [
            //add
            'username.required' => '名前を入力してください',
            'username.max' => '名前を２０文字以下で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.max' => 'パスワードは１２文字以下で入力してください',
            'password.min' => 'パスワードは8文字以上で入力してください',
            'latitude.min' => '緯度はー９０度以上で入力してください',
            'latitude.max' => '緯度は90度以下で入力してください',
            'longitude.max' => '経度は１８０度以下で入力してください',
            'longitude.min' => '経度は-180度以上で入力してください。'
        ];
    }
}
