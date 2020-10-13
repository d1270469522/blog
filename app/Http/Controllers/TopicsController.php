<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Http\Requests\TopicRequest;

class TopicsController extends Controller
{
    public function index(Request $request, Topic $topic, User $user)
    {
        $topics = $topic->withOrder($request->order)
                        ->with('user', 'category')  // 预加载防止 N+1 问题
                        ->paginate(6);

        return view('topics.index', compact('topics'));
    }

    public function show(Request $request, Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }

    public function create()
    {
        return view('topics.create');
    }

    public function store(TopicRequest $request)
    {
        $topic = Topic::create([
            'title'       => $request->title,
            'category_id' => $request->category_id,
            'user_id'     => 1,
            'image'       => $request->image,
            'desc'        => $request->desc,
            'content'     => $request->content,
            'is_top'      => $request->is_top == 'on' ? 1 : 0,
            'is_hot'      => $request->is_hot == 'on' ? 1 : 0,
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
