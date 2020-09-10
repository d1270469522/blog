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
      <a href="javascript:void(0)"></a><img src="{{ URL::asset('images/admin.jpeg') }}" class="user-img">
      <h2 class="user-name">天尽头流浪</h2>
    </div>
    <div class="layui-col-xs4 layui-col-sm4 layui-col-md4 user-section1">
      <div class="tags f-fr mr20">微信</div>
      <div class="tags f-fr mr20">QQ</div>
      <div class="tags f-fr mr20">GitHub</div>
    </div>
  </div>

  <div class="layui-row">
    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 user-motto">
      <p>注册于：1年前 ，最后活跃于：17秒前</p>
      <p>你只管努力，剩下的交给天意!你只管努力，剩下的交给天意</p>
    </div>
  </div>

  <div class="layui-row user-desc">
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      姓名：张三
    </div>
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      性别：男
    </div>
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      城市：北京
    </div>
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      公司：公司
    </div>
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      职位：PHP
    </div>
    <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
      邮箱：123@qq.com
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
  <!-- <script src="{{ URL::asset('js/user.js') }}"></script> -->
@stop
