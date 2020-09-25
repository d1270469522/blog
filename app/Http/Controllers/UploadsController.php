<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use Auth;

class UploadsController extends Controller
{
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'code' => 201,
            'msg'  => '上传失败!',
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->file('file')) {
            // 保存图片到本地
            $result = $uploader->save($file, 'topics', 1, 1024);
            // $result = $uploader->save($file, 'topics', \Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['code'] = 0;
                $data['msg']  = "上传成功!";
                $data['data'] = ['src' => $result['path']];
            }
        }
        return $data;
    }
}
