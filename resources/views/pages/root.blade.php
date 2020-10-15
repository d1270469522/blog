<!DOCTYPE html>
<html lang="zh-Hans-CN">
<head>
  <meta charset="utf-8">
  <title>天尽头流浪博客</title>

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('layui/css/layui.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.min.css') }}">
</head>
<body>

  <!-- 上半部分：右侧：菜单按钮 -->
  <div id="menu" class="hover_animation menu_open" data-mark="false">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- 上半部分：右侧：展开之后，显示的内容 -->
  <div id="navgation" class="navgation navgation_close">
    <ul class="point">
      <li><a href="{{ route('root') }}">首页</a></li>
      <li><a href="{{ route('topics.index') }}">博客</a></li>
      @guest
        <li><a href="{{ route('login') }}">登录</a></li>
      @endif
    </ul>
    <!-- 右下角：签名 -->
    <div class="logo"><a>天尽头流浪</a></div>
  </div>

  <!-- 上半部分：基本信息介绍 -->
  <div class="section" id="section1">
    <div class="fp-tablecell">
      <div class="page1">
        <div class="nav wow zoomIn" data-wow-duration="2s">
          <h1>天尽头流浪</h1>
          <p>你只管努力，剩下的交给天意！</p>
          <a class="btn" href="{{ route('topics.index') }}">进入博客列表</a>
        </div>
        <a class="next wow fadeInUp" data-wow-duration="2s" id="next"></a>
      </div>
    </div>
  </div>

  <!-- 中间部分：基本分类 -->
  <div class="section" id="section2">
    <div class="fp-tablecell">
      <div class="page2">
        <div class="warp-box">
          <div class="new-article">
            <div class="inner wow fadeInDown" data-wow-delay=".2s">
              <h1>推荐阅读</h1>
              <p>只要朝着一个方向努力，一切都会变得得心应手！</p>
            </div>
          </div>
          <div class="layui-row">
            @foreach($top_topics as $top_topic)
            <div class="layui-col-xs12 layui-col-sm4 layui-col-md4  wow fadeInUp">
              <div class="single-news">
                <div class="news-head">
                  <img src="{{ $top_topic->image }}">
                  <a href="{{ route('topics.show', $top_topic->id) }}" class="link"><i class="fa fa-link"></i></a>
                </div>
                <div class="news-content">
                  <h4><a href="{{ route('topics.show', $top_topic->id) }}">{{ $top_topic->title }}</a></h4>
                  <div class="date">{{ $top_topic->created_at }}</div>
                  <p>{{ $top_topic->desc }}</p>
                  <a href="{{ route('topics.show', $top_topic->id) }}" class="btn">阅读更多</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 下面部分：关于 & 链接 -->
  <div class="section" id="section3">
    <div class="fp-tablecell">
      <div class="page3">
        <div class="warp-box">
          <div class="warp">
            <div class="inner">
              <div class="links">
                <ul>
                  <li class="wow fadeInLeft"><a href="{{ route('users.show', 1) }}">关于作者</a></li>
                  <li class="wow fadeInRight"><a href="javascript:void(0)">友情链接</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 下面部分：一句话介绍 -->
  <div class="section" id="section4">
    <div class="fp-tablecell">
      <div class="page4">
        <div class="warp-box">
          <div class="about">
            <div class="inner">
              <h3 class="wow fadeInLeft">努力到无能为力，拼搏到感动自己</h3>
              <p class="wow fadeInRight">一天很短，开心了就笑，不开心了就过会儿再笑。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 底部：相关链接 -->
  <footer class="footer wow fadeInUp" id="contact">
    <!-- 链接信息 -->
    <div class="footer-top">
      <div class="container">
        <div class="layui-row">
          <!-- 关于我 -->
          <div class="layui-col-xs12 layui-col-sm6 layui-col-md4">
            <div class="single-widget about">
              <h2>天尽头流浪</h2>
              <p>世界那么大，我想去看看</p>
              <a href="{{ route('users.show', 1) }}" class="btn">About Me</a>
            </div>
          </div>
          <!-- 其它链接 -->
          <div class="layui-col-xs12 layui-col-sm6 layui-col-md4">
            <div class="single-widget">
              <h2>相关链接</h2>
              <ul class="social-icon">
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-book"></i>分类</a></li>
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-comments"></i>博文</a></li>
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-share"></i>留言</a></li>
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-snowflake-o"></i>活跃</a></li>
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-files-o"></i>热门</a></li>
                <li class="active"><a href="{{ route('topics.index') }}"><i class="fa fa-files-o"></i>置顶</a></li>
              </ul>
            </div>
          </div>
          <!-- 联系我 -->
          <div class="layui-col-xs12 layui-col-sm12 layui-col-md4">
            <div class="single-widget contact">
              <h2>联系我</h2>
              <ul class="list">
                <li><i class="fa fa-map"></i>地址：北京市大兴区</li>
                <li><i class="fa fa-qq"></i>QQ: 1270469522 </li>
                <li><i class="fa fa-envelope"></i>邮箱: 1270469522@qq.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 备案信息 -->
    <div class="copyright">
      <div class="container">
        <div class="layui-row">
          <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 text-center">
            <p>Copyright &copy; 2019-2021 天尽头流浪 All Rights Reserved V.1.0.0 京ICP备19047598号</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Js部分引入 -->
  <script src="{{ URL::asset('layui/layui.js') }}"></script>
  <script src="{{ URL::asset('js/wow.min.js') }}"></script>
  <script src="{{ URL::asset('js/index.js') }}"></script>

</body>
</html>
