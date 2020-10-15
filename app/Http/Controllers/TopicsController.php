<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TopicRequest;

class TopicsController extends Controller
{
    public function index(Request $request, Topic $topic, User $user)
    {
        $topics = $topic->withOrder($request->order)->with('category')->paginate(6);
        $hot_topics = $topic->hotTopics();
        $categories = Category::all();
// echo '<pre>';
// print_r($topics);die;
        return view('topics.index', compact('topics', 'categories', 'hot_topics'));
    }

    public function show(Request $request, Topic $topic)
    {
        $hot_topics = $topic->hotTopics();
        $categories = Category::all();
        $author = User::find($topic->user_id);

        return view('topics.show', compact('topic', 'hot_topics', 'categories', 'author'));
    }

    public function create(Topic $topic)
    {
        $categories = Category::all();
        return view('topics.create_and_edit', compact('topic', 'categories'));
    }

    public function store(TopicRequest $request)
    {
        $topic = Topic::create([
            'title'        => $request->title,
            'category_id'  => $request->category_id,
            'user_id'      => 1,
            'image'        => $request->image,
            'desc'         => $request->desc,
            'content'      => $request->content,
            'content_html' => $request->content_html,
            'is_top'       => $request->is_top == 'on' ? 1 : 0,
            'is_hot'       => $request->is_hot == 'on' ? 1 : 0,
        ]);

        return $topic;
    }

    public function edit(Topic $topic)
    {
        $categories = Category::all();
        return view('topics.create_and_edit', compact('topic', 'categories'));
    }

    public function update(TopicRequest $request, Topic $topic)
    {
        $attributes = $request->only([
            'title', 'category_id', 'image', 'desc', 'content',
            'content_html', 'is_top', 'is_hot',
        ]);

        $attributes['is_top'] = isset($attributes['is_top']) ? 1 : 0;
        $attributes['is_hot'] = isset($attributes['is_hot']) ? 1 : 0;

        if ($topic->update($attributes)) {
            return $topic;
        }
    }
}
