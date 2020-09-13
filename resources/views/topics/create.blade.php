@extends('layouts.app')

@section('title', '博客创建')

@section('content')

<div class="layui-container">

  <fieldset class="layui-elem-field layui-field-title">
    <legend>博客创建</legend>
  </fieldset>

  <form class="layui-form" action="">

    <div class="layui-form-item">
      <label class="layui-form-label">标题</label>
      <div class="layui-input-block">
        <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">分类</label>
        <div class="layui-input-inline">
          <select name="modules" lay-verify="required" lay-search="">
            <option value="">直接选择或搜索选择</option>
            <option value="1">layer</option>
            <option value="2">form</option>
            <option value="3">layim</option>
            <option value="4">element</option>
            <option value="5">laytpl</option>
            <option value="6">upload</option>
            <option value="7">laydate</option>
            <option value="8">laypage</option>
            <option value="9">flow</option>
            <option value="10">util</option>
            <option value="11">code</option>
            <option value="12">tree</option>
            <option value="13">layedit</option>
            <option value="14">nav</option>
            <option value="15">tab</option>
            <option value="16">table</option>
            <option value="17">select</option>
            <option value="18">checkbox</option>
            <option value="19">switch</option>
            <option value="20">radio</option>
          </select>
        </div>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">标签</label>
      <div class="layui-input-block">
        <input type="checkbox" name="like[write]" title="写作">
        <input type="checkbox" name="like[read]" title="阅读" checked="">
        <input type="checkbox" name="like[game]" title="游戏">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">是否置顶</label>
      <div class="layui-input-block">
        <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF">
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">简介</label>
      <div class="layui-input-block">
        <textarea placeholder="请输入内容" class="layui-textarea"></textarea>
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">正文</label>
      <div class="layui-input-block">
        <textarea id="editor"></textarea>
      </div>
    </div>

    <div class="layui-form-item">
      <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>

  <br>
  <hr>
  <br>

  <article class="markdown-body" id="preview">
    <h2>你好啊</h2>
    <pre>
      <code>
CREATE TABLE "topic" (
    "id" serial NOT NULL PRIMARY KEY,
    "forum_id" integer NOT NULL,
    "subject" varchar(255) NOT NULL
);
ALTER TABLE "topic"
ADD CONSTRAINT forum_id FOREIGN KEY ("forum_id")
REFERENCES "forum" ("id");

-- Initials
insert into "topic" ("forum_id", "subject")
values (2, 'D''artagnian');</code>
    </pre>
    <blockquote>
    <p>你好<br>你好</p>
    </blockquote>
  </article>
</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/simplemde.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/github-markdown.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/monokai-sublime.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/topics_create.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/simplemde.min.js') }}"></script>
  <script src="{{ URL::asset('js/highlight.pack.js') }}"></script>
  <script src="{{ URL::asset('js/topics_create.js') }}"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
@stop
