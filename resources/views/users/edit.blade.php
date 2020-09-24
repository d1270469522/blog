@extends('layouts.app')

@section('title', '编辑资料')

@section('content')

<div class="layui-container">

  <fieldset class="layui-elem-field layui-field-title">
    <legend>编辑资料</legend>
  </fieldset>

  <form class="layui-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

    <input type="hidden" name="user_id" value="{{ $user->id }}">

    <div class="layui-form-item">
      <label class="layui-form-label">昵称</label>
      <div class="layui-input-block">
        <input type="text" name="nick_name" lay-verify="nick_name" autocomplete="off" placeholder="请输入昵称" class="layui-input" value="{{ $user->nick_name }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">邮箱</label>
      <div class="layui-input-block">
        <input type="text" name="email" lay-verify="email" autocomplete="off" placeholder="请输入邮箱" class="layui-input" value="{{ $user->email }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">照片:</label>
      <div class="layui-input-block">
        <div class="layui-upload">
          <button type="button" class="layui-btn" id="imagesBtn">上传图片</button>
          <div class="layui-upload-list">
            <img class="layui-upload-img" id="imagesPre">
            <p id="imagesText"></p>
          </div>
          <input type="hidden" name="avatar" id="avatar">
        </div>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">姓名</label>
      <div class="layui-input-block">
        <input type="text" name="real_name" lay-verify="real_name" autocomplete="off" placeholder="请输入姓名" class="layui-input" value="{{ $user->real_name }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">手机</label>
      <div class="layui-input-block">
        <input type="text" name="phone" lay-verify="phone" autocomplete="off" placeholder="请输入手机号" class="layui-input" value="{{ $user->phone }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">QQ</label>
      <div class="layui-input-block">
        <input type="text" name="qq" lay-verify="qq" autocomplete="off" placeholder="请输入QQ号" class="layui-input" value="{{ $user->qq }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">公司</label>
      <div class="layui-input-block">
        <input type="text" name="company_name" lay-verify="company_name" autocomplete="off" placeholder="请输入公司" class="layui-input" value="{{ $user->company_name }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">职位</label>
      <div class="layui-input-block">
        <input type="text" name="company_position" lay-verify="company_position" autocomplete="off" placeholder="请输入职位" class="layui-input" value="{{ $user->company_position }}">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">性别</label>
      <div class="layui-input-block">
        <input type="radio" name="sex" value="男" title="男" checked="">
        <input type="radio" name="sex" value="女" title="女">
        <input type="radio" name="sex" value="禁" title="禁用" disabled="">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">住址</label>
      <div class="layui-input-inline">
        <select name="province">
          <option value="">请选择省</option>
          <option value="浙江" selected="">浙江省</option>
          <option value="你的工号">江西省</option>
          <option value="你最喜欢的老师">福建省</option>
        </select>
      </div>
      <div class="layui-input-inline">
        <select name="city">
          <option value="">请选择市</option>
          <option value="杭州">杭州</option>
          <option value="宁波" disabled="">宁波</option>
          <option value="温州">温州</option>
          <option value="温州">台州</option>
          <option value="温州">绍兴</option>
        </select>
      </div>
      <div class="layui-input-inline">
        <select name="county">
          <option value="">请选择县/区</option>
          <option value="西湖区">西湖区</option>
          <option value="余杭区">余杭区</option>
          <option value="拱墅区">临安市</option>
        </select>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">爱好</label>
      <div class="layui-input-block">
        <input type="checkbox" name="like[write]" title="写作">
        <input type="checkbox" name="like[read]" title="阅读" checked="">
        <input type="checkbox" name="like[game]" title="游戏">
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">简介</label>
      <div class="layui-input-block">
        <textarea name="introduction" placeholder="请输入内容" class="layui-textarea">{{ $user->introduction }}</textarea>
      </div>
    </div>

    <div class="layui-form-item">
      <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="userEditBtn">保存</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>


</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/users_edit.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/users_edit.js') }}"></script>
@stop
