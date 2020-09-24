@extends('layouts.app')

@section('title', '个人中心')

@section('content')

<div class="layui-container">

  <div class="layui-row">
    <div class="layui-col-xs4 layui-col-sm4 layui-col-md4 user-section1">
      <div class="tags f-fl ml20">文章<br>99</div>
      <div class="tags f-fl ml20">回复<br>99</div>
      <div class="tags f-fl ml20">点赞<br>99</div>
    </div>
    <div class="layui-col-xs4 layui-col-sm4 layui-col-md4 user-section1">
      <a href="javascript:void(0)">
        <img src="{{ !empty($user->avatar) ? : URL::asset('images/nologin.jpg') }}" class="user-img">
      </a>
      <h2 class="user-name">{{ $user->nick_name ?? '未设置' }}</h2>
    </div>
    <div class="layui-col-xs4 layui-col-sm4 layui-col-md4 user-section1">
      <div class="tags f-fr mr20"><a href="{{ route('users.edit', 1) }}">编辑</a></div>
    </div>
  </div>

  <div class="layui-row">
    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 user-introduction">
      <p>注册于：1年前 ，最后活跃于：17秒前</p>
      <p>{{ $user->introduction ?? '这个人很懒，什么也没有留下！' }}</p>
    </div>
  </div>

  <div class="layui-row layui-col-space30 user-desc">
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">邮箱：{{ $user->email }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">姓名：{{ $user->name }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">性别：{{ $user->sex }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">手机：{{ $user->phone }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">公司：{{ $user->company_name }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">职位：{{ $user->company_position }}</div>
    </div>
    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
      <div class="user-desc-info">城市：{{ $user->address }}</div>
    </div>
  </div>

  <div class="layui-row">
    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 statistics" id="statistics"></div>
  </div>


</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/highcharts.js') }}"></script>
  <script src="{{ URL::asset('js/statistics.js') }}"></script>
@stop
