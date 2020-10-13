<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Http\Requests\TopicRequest;

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

    public function store(TopicRequest $request)
    {
        $data = $request->all();
        return  $data;
        $topic = Topic::create([
            'title'       => $request->title,
            'category_id' => $request->category_id,
            'user_id'     => $request->user_id,
            'image'       => $request->image,
            'desc'        => $request->desc,
            'content'     => $request->content,
            'is_top'      => $request->is_top,
            'is_hot'      => $request->is_hot,
        ]);

        return $topic;
    }

    public function edit(Topic $topic)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, Topic $topic)
    {
        $attributes = $request->only([
            'nick_name', 'real_name', 'email', 'phone', 'qq',
            'wechat', 'sex', 'avatar', 'introduction', 'company_name',
            'company_position', 'province', 'city', 'county', 'address',
        ]);

        if ($topic->update($attributes)) {
            return $topic;
        }
    }
}
