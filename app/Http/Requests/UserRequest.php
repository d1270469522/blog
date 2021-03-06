<?php

namespace App\Http\Requests;
use Auth;

class UserRequest extends Request
{
    public function rules()
    {
        switch($this->method()) {
        case 'POST':
            return [
                'email'    => 'bail|required|email|unique:users,email',
                'password' => 'bail|required|string|min:6',
            ];
            break;
        case 'PUT':
        case 'PATCH':
            return [
                'nick_name' => 'bail|between:1,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u',
                'real_name' => 'bail|between:1,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u',
                'email'     => 'bail|email|unique:users,email,' . 1,
                // 'email'     => 'bail|email|unique:users,email,' . Auth::id(),
            ];
            break;
        }
    }

    public function attributes()
    {
        return [
            'nick_name' => '昵称',
            'real_name' => '姓名',
        ];
    }

    public function messages()
    {
        return [
            'nick_name.regex' => '姓名只支持中英文、数字、横杆和下划线。',
        ];
    }
}
