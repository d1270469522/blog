<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Request $request, Category $category, Topic $topic)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = $topic->withOrder($request->order)
                        ->where('category_id', $category->id)
                        ->paginate(6);

        $hot_topics = $topic->hotTopics();
        $categories = Category::all();

        // 传参变量到模板中
        return view('topics.index', compact('topics', 'categories', 'hot_topics'));
    }
}
