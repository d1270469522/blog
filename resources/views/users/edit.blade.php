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
      <label class="layui-form-label">头像:</label>
      <div class="layui-input-block">
        <div class="layui-upload">
          <div class="layui-upload-list imagesBtn" id="imagesBtn">
            <img class="layui-upload-img imagesPre" id="imagesPre" src="{{ $user->avatar ?? URL::asset('images/nologin.jpg') }}">
          </div>
          <p class="imagesTip">点击图片，编辑头像</p>
          <input type="hidden" name="avatar" id="imagesInput" value="{{ $user->avatar ?? '' }}">
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
      <label class="layui-form-label">性别</label>
      <div class="layui-input-block">
        <input type="radio" name="sex" value="男" title="男" @if($user->sex=='男')checked=''@endif>
        <input type="radio" name="sex" value="女" title="女" @if($user->sex=='女')checked=''@endif>
      </div>
    </div>

    <div class="layui-form-item" id="area-picker">
      <div class="layui-form-label">地区</div>
      <div class="layui-input-inline" style="width: 200px;">
        <select name="province" class="province-selector" data-value="{{ $user->province ?? '北京市'}}" lay-filter="province-1">
          <option value="">请选择省</option>
        </select>
      </div>
      <div class="layui-input-inline" style="width: 200px;">
        <select name="city" class="city-selector" data-value="{{ $user->city ?? '北京市'}}" lay-filter="city-1">
          <option value="">请选择市</option>
        </select>
      </div>
      <div class="layui-input-inline" style="width: 200px;">
        <select name="county" class="county-selector" data-value="{{ $user->county ?? '东城区'}}" lay-filter="county-1">
          <option value="">请选择区</option>
        </select>
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">住址</label>
      <div class="layui-input-block">
        <input type="text" name="address" lay-verify="address" autocomplete="off" placeholder="请输入公司" class="layui-input" value="{{ $user->address }}">
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
  <script src="{{ URL::asset('js/upload.js') }}"></script>
@stop
