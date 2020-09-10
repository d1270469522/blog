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
            <h4 class="title">你若盛开，蝴蝶自来！</h4>
            <p class="fc-grey fs-14">
              <small>作者 <a href="javascript:void(0)" class="fc-link">天尽头流浪</a></small>
              <small class="ml10">围观群众 <label>121</label></small>
              <small class="ml10">更新于 <label>2020-07-1:11:20:21</label></small>
            </p>
          </aside>

          <!-- 右侧创建时间 -->
          <div class="time mt10" style="padding-bottom:0;">
            <span class="day">1</span>
            <span class="month fs-18">7<small class="fs-14">月</small></span>
            <span class="year fs-18">2020</span>
          </div>

          <!-- 正文 -->
          <div class="content artiledetail">
            <a style="display: inline-block; width: 300px; height: 180px; border-radius: 10px; float: right;border-bottom: padding-right: 10px; margin-right: 10px;" >
              <img src="{{ URL::asset('images/index.jpg') }}" style="height: 100%; width: 100%">
            </a>

            帝王：待我君临天下，许你四海为家 ｜ 待你君临天下，我已昨日黄花<br>
            朝臣：待我了无牵挂，许你浪迹天涯 ｜ 待你了无牵挂，我已两鬓霜华<br>
            将军：待我半身戎马，许你共话桑麻 ｜ 待你半身戎马，红颜枯骨成沙<br>
            书生：待我功成名就，许你花前月下 ｜ 待你功成名就，难忆旧事芳华<br>
            侠客：待我名满华夏，许你当歌纵马 ｜ 待你名满华夏，我已厌倦厮杀<br>
            琴师：待我弦断音垮，许你青丝白发 ｜ 待你弦断音垮，何来求暖取答<br>
            面首：待我不再有他，许你淡饭粗茶 ｜ 待你不再有他，君言何断真假<br>
            情郎：待我高头大马，许你嫁衣红霞 ｜ 待你高头大马，青梅为父已嫁<br>
            农夫：待我荣华富贵，许你十里桃花 ｜ 待你荣华富贵，我已种豆得瓜<br>
            僧侣：待我一身袈裟，许你相思放下 ｜ 待你一身袈裟，我已参透真假<br>

          </div>

          <div class="copyright mt20">
            <p class="f-toe">本文标题：<a href="javascript:void(0)">你若盛开，蝴蝶自来！</a></p>
            <p class="f-toe">本文网址：<a href="javascript:void(0)">http://www.lzqcode.com</a></p>
            <p class="f-toe fc-black">非特殊说明，本文版权归 天尽头流浪个人博客 所有，转载请注明出处.</p>
          </div>

          <h6>延伸阅读</h6>
          <ol class="b-relation">
            <li>上一篇：<a href="javascript:void(0)">你好啊</a></li>
            <li>下一篇：<a href="javascript:void(0)">你们好</a></li>
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
@stop

@section('scripts')
  <script src="{{ URL::asset('js/topics.js') }}"></script>
@stop
