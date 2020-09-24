<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use Auth;

class TopicsController extends Controller
{
    public function index()
    {
        return view('topics.index');
    }

    public function show()
    {
        return view('topics.show');
    }

    public function create()
    {
        return view('topics.create');
    }

    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        return $request;
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => 201,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file, 'topics', 1, 1024);
            // $result = $uploader->save($file, 'topics', \Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = 200;
            }
        }
        return $data;
    }
}
