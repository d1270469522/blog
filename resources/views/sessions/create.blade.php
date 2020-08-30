@extends('layouts.app')

@section('title', '话题列表')

@section('content')

<div class="wrap">
  <img src="{{ URL::asset('images/city1.jpg') }}" class="imgStyle">
  <div class="loginForm">
    <form>
      <div class="logoHead">登录页面</div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>用户名:</label>
        </div>
        <div class="usernameDiv">
          <i class="layui-icon layui-icon-username adminIcon"></i>
          <input id="loginUsername" class="layui-input adminInput" type="text" name="username" placeholder="用户名｜邮箱｜手机号" lay-verType="tips">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>密码:</label>
        </div>
        <div class="usernameDiv">
          <i class="layui-icon layui-icon-password adminIcon"></i>
          <input id="loginPassword" class="layui-input adminInput" type="password" name="password" placeholder="输入密码">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>验证码:</label>
        </div>
        <div class="usernameDiv">
          <input id="loginCard" class="layui-input cardInput" type="text" name="card" placeholder="输入验证码">
          <input id="loginCode" class="layui-input codeInput"  type="button">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="submitLabel">
          <label>没有账号？<a href="{{ route('signup') }}" id="loginRegister">点击注册</a></label>
        </div>
        <div class="submitDiv">
          <input id="loginBtn" type="button" class="submit layui-btn layui-btn-primary" value="登&nbsp;&nbsp;&nbsp;&nbsp;录"></input>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/login.js') }}"></script>
@stop
