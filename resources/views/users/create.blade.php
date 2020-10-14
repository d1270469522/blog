@extends('layouts.app')

@section('title', '注册')

@section('content')

<div class="wrap">

  <!-- 注册模块 -->
  <div class="loginForm registerForm">
    <!-- 注册表单 -->
    <form>
      <div class="logoHead">注册页面</div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>邮箱:</label>
        </div>
        <div class="usernameDiv">
          <i class="layui-icon layui-icon-username adminIcon"></i>
          <input id="email" class="layui-input adminInput" type="text" name="email" placeholder="输入邮箱" value="{{ old('email') }}">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>密码:</label>
        </div>
        <div class="usernameDiv">
          <i class="layui-icon layui-icon-password adminIcon"></i>
          <input id="password" class="layui-input adminInput" type="password" name="password" placeholder="输入密码">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>确认密码:</label>
        </div>
        <div class="usernameDiv">
          <i class="layui-icon layui-icon-password adminIcon"></i>
          <input id="password_confirmation" class="layui-input adminInput" type="password" name="password_confirmation" placeholder="输入密码">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="usernameLabel">
          <label>验证码:</label>
        </div>
        <div class="usernameDiv">
          <input id="loginCard" class="layui-input cardInput" type="text" name="card" placeholder="输入验证码" autocomplete="off">
          <input id="loginCode" class="layui-input codeInput"  type="button">
        </div>
      </div>
      <div class="usernameWrapDiv">
        <div class="submitLabel">
          <label>已有账号！<a href="{{ route('login') }}">去登陆</a></label>
        </div>
        <div class="submitDiv">
          <input id="registerBtn" type="button" class="submit layui-btn layui-btn-primary" value="注&nbsp;&nbsp;&nbsp;&nbsp;册"></input>
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
