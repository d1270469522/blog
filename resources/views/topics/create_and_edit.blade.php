@extends('layouts.app')

@section('title', '博客创建')

@section('content')

<div class="layui-container">

  <fieldset class="layui-elem-field layui-field-title">
    <legend>博客创建</legend>
  </fieldset>

  <form class="layui-form" action="">

    <input type="hidden" name="topic_id" value="{{ $topic->id}}">

    <div class="layui-form-item">
      <label class="layui-form-label">标题</label>
      <div class="layui-input-block">
        <input type="text" name="title" lay-verify="required" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" value="{{ $topic->title }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">置顶</label>
      <div class="layui-input-block">
        <input type="checkbox" name="is_top" lay-skin="switch" lay-text="ON|OFF">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">热门</label>
      <div class="layui-input-block">
        <input type="checkbox" name="is_hot" lay-skin="switch" lay-text="ON|OFF">
      </div>
    </div>

    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">分类</label>
        <div class="layui-input-inline">
          <select name="category_id" lay-verify="required" lay-search="">
            <option value="">直接选择或搜索选择</option>
            @foreach ($categories as $value)
            <option value="{{ $value->id }}"
              {{ $topic->category_id == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">标签</label>
      <div class="layui-input-block">
        <input type="checkbox" name="tags[1]" title="前端">
        <input type="checkbox" name="tags[2]" title="后端">
        <input type="checkbox" name="tags[3]" title="服务器">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">配图</label>
      <div class="layui-input-block">
        <div class="layui-upload">
          <div class="layui-upload-list imagesBtn" id="imagesBtn">
            <img class="layui-upload-img imagesPre" id="imagesPre" src="{{ $topic->image ?? URL::asset('images/demo1.jpg') }}">
          </div>
          <p class="imagesTip">点击图片，进行编辑</p>
          <input type="hidden" name="image" id="imagesInput" value="{{ $topic->image ?? URL::asset('images/demo1.jpg') }}">
        </div>
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">简介</label>
      <div class="layui-input-block">
        <textarea placeholder="请输入内容" name="desc" lay-verify="required" class="layui-textarea">{{ $topic->desc }}</textarea>
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">正文</label>
      <div class="layui-input-block">
        <textarea id="editor" name="content">{{ $topic->content }}</textarea>
      </div>
    </div>

    <div class="layui-form-item">
      <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="userEditBtn">立即提交</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>

</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/topics_create.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/upload.js') }}"></script>
  <!-- markdown必备js，不需要css -->
  <script src="{{ URL::asset('js/simplemde.min.js') }}"></script>
  <script src="{{ URL::asset('js/topics_create.js') }}"></script>
@stop
