@extends('layouts.app')

@section('title', '话题详情')

@section('content')

<div class="container-fixed">
  <div class="col-content">
    <div class="inner">
      <article class="article-list">
        <!-- 隐藏 博客ID -->
        <input type="hidden" value="1" id="topic_id" />
        <section class="article-item">

          <!-- 标题 作者 阅读量 时间 -->
          <aside>
            <h4 class="title">
              {{ $topic->title }}
            </h4>
            <p class="fc-grey fs-14">
              <small>作者 <a href="javascript:void(0)" class="fc-link">{{ $author->nick_name ?? '外星人' }}</a></small>
              <small class="ml10">浏览 <label>{{ $topic->view_count }}</label></small>
              <small class="ml10">更新于 <label>{{ $topic->updated_at }}</label></small>
              <a href="{{ route('topics.edit', $topic->id) }}" class="topic_edit">编辑</a>
              <a href="{{ route('topics.destroy', $topic->id) }}" class="topic_edit">删除</a>
            </p>
          </aside>

          <!-- 右侧创建时间 -->
          <div class="time mt10" style="padding-bottom:0;">
            <span class="day">{{ date('d', strtotime($topic->created_at)) }}</span>
            <span class="month fs-18">{{ date('m', strtotime($topic->created_at)) }}<small class="fs-14">月</small></span>
            <span class="year fs-18">{{ date('Y', strtotime($topic->created_at)) }}</span>
          </div>

          <!-- 正文 -->
          <div class="content artiledetail markdown-body">
            {!! $topic->content_html !!}
          </div>

          <div class="copyright mt20">
            <p class="f-toe">本文标题：<a href="javascript:void(0)">{{ $topic->title }}</a></p>
            <p class="f-toe">本文网址：<a href="javascript:void(0)">http://www.lzqcode.com</a></p>
            <p class="f-toe fc-black">非特殊说明，本文版权归 {{ $author->nick_name ?? '外星人' }} 所有，转载请注明出处.</p>
          </div>

          <h6>延伸阅读</h6>
          <ol class="b-relation">
            <li>上一篇：<a href="javascript:void(0)">没有了</a></li>
            <li>下一篇：<a href="javascript:void(0)">没有了</a></li>
          </ol>

        </section>
      </article>
    </div>
  </div>
  @include('shard._sidebar')
</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/topics_index.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/topics_show.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
  <!-- markdown 转成 html后语法样式 -->
  <link rel="stylesheet" href="{{ URL::asset('css/github-markdown.css') }}" />
  <!-- markdown 代码高亮 -->
  <link rel="stylesheet" href="{{ URL::asset('css/monokai-sublime.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/topics.js') }}"></script>
  <!-- markdown 代码高亮 -->
  <script src="{{ URL::asset('js/highlight.pack.js') }}"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
@stop
