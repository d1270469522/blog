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
                'nick_name' => 'required|between:3,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u|unique:users,name',
                'real_name' => 'required|between:3,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u|unique:users,name',
                'email'     => 'email|unique:users,email',
                'password'  => 'required|string|min:6',

        'email',
        'password',
        'phone',
        'qq',
        'wechat',
        'sex',
        'avatar',
        'introduction',
        'company_name',
        'company_position',
        'address',
            ];
            break;
        case 'PUT':
        case 'PATCH':
            return [
                'nick_name'       => 'between:3,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u|unique:users,name,' . Auth::id(),
                'real_name'       => 'between:3,25|regex:/[\w\x{4e00}-\x{9fa5}]{2,25}/u|unique:users,name,' . Auth::id(),
                'email'           => 'email|unique:users,email,' . Auth::id(),
                'introduction'    => 'max:80',
                'avatar_image_id' => 'exists:images,id,type,avatar,user_id,' . Auth::id(),
            ];
            break;
        }
    }

    public function attributes()
    {
        return [
            'nick_name' => '昵称',
        ];
    }

    public function messages()
    {
        return [
            'name.unique'   => '用户名已被占用，请重新填写',
            'name.regex'    => '用户名只支持中英文、数字、横杆和下划线。',
            'name.between'  => '用户名必须介于 3 - 25 个字符之间。',
            'name.required' => '用户名不能为空。',
        ];
    }
}
