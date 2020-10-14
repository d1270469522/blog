<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class PagesController extends Controller
{
    public function root(Topic $topic)
    {
        $top_topics = $topic->topTopics();

        return view('pages.root', compact('top_topics'));
    }
}
