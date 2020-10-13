<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        return [];
        switch($this->method()) {
        case 'POST':
            return [
                'title'   => 'bail|required|string',
                'desc'    => 'bail|required|string',
                'content' => 'bail|required|string',
                // 'category_id' => 'bail|required|exists:categories,id',
            ];
            break;
        case 'PUT':
        case 'PATCH':
            return [
                'title'   => 'bail|string',
                'desc'    => 'bail|string',
                'content' => 'bail|string',
                // 'category_id' => 'bail|exists:categories,id',
            ];
            break;
        }
    }

    public function attributes()
    {
        return [
            'desc' => '简介',
        ];
    }

    public function messages()
    {
        return [
            'nick_name.regex' => '姓名只支持中英文、数字、横杆和下划线。',
        ];
    }
}
