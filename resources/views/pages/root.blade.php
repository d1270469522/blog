<!DOCTYPE html>
<html lang="zh-Hans-CN">
<head>
  <meta charset="utf-8">
  <title>天尽头流浪博客</title>

  <link href="{{ URL::asset('css/index_style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('layui/css/layui.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
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
      <li><a href="{{ route('topics.index') }}">留言</a></li>
    </ul>
    <!-- 右下角：签名 -->
    <div class="logo"><a>Tianjintou Liulang</a></div>
  </div>

  <!-- 上半部分：基本信息介绍 -->
  <div class="section" id="section1">
    <div class="fp-tablecell">
      <div class="page1">
        <div class="nav wow zoomIn" data-wow-duration="2s">
          <h1>天尽头流浪博客</h1>
          <p>你只管努力，剩下的交给天意！</p>
          <a class="layui-btn layui-btn-normal" style="margin-top: 20px" href="{{ route('topics.index') }}">进入博客列表</a>
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
              <h1>博客分类</h1>
              <p>只要朝着一个方向努力，一切都会变得得心应手</p>
            </div>
          </div>
          <div class="layui-row">
            <!-- 分类：第一个 -->
            <div class="layui-col-xs12 layui-col-sm4 layui-col-md4  wow fadeInUp" style="padding: 0 10px">
              <div class="single-news">
                <div class="news-head">
                  <img src="http://www.lzqcode.com/images/java.jpg">
                  <a href="{{ route('root') }}" class="link"><i class="fa fa-link"></i></a>
                </div>
                <div class="news-content">
                  <h4><a href="{{ route('root') }}">Java专栏</a></h4>
                  <div class="date">2020年6月16日</div>
                  <p>本专栏主要分享Java的各种常见问题，包括java学习路线，java基础，框架，微服务，项目，面试题。</p>
                  <a href="{{ route('root') }}" class="btn">阅读更多</a>
                </div>
              </div>
            </div>
            <!-- 分类：第二个 -->
            <div class="layui-col-xs12 layui-col-sm4 layui-col-md4  wow fadeInUp" data-wow-delay=".2s" style="padding: 0 10px">
              <div class="single-news">
                <div class="news-head">
                  <img src="http://www.lzqcode.com/images/java.jpg">
                  <a href="{{ route('root') }}" class="link"><i class="fa fa-link"></i></a>
                </div>
                <div class="news-content">
                  <h4><a href="{{ route('root') }}">Java专栏</a></h4>
                  <div class="date">2020年6月16日</div>
                  <p>本专栏主要分享Java的各种常见问题，包括java学习路线，java基础，框架，微服务，项目，面试题。</p>
                  <a href="{{ route('root') }}" class="btn">阅读更多</a>
                </div>
              </div>
            </div>
            <!-- 分类：第三个 -->
            <div class="layui-col-xs12 layui-col-sm4 layui-col-md4  wow fadeInUp" data-wow-delay=".4s" style="padding: 0 10px">
              <div class="single-news">
                <div class="news-head">
                  <img src="http://www.lzqcode.com/images/java.jpg">
                  <a href="{{ route('root') }}" class="link"><i class="fa fa-link"></i></a>
                </div>
                <div class="news-content">
                  <h4><a href="{{ route('root') }}">Java专栏</a></h4>
                  <div class="date">2020年6月16日</div>
                  <p>本专栏主要分享Java的各种常见问题，包括java学习路线，java基础，框架，微服务，项目，面试题。</p>
                  <a href="{{ route('root') }}" class="btn">阅读更多</a>
                </div>
              </div>
            </div>
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
                  <li class="wow fadeInLeft"><a href="{{ route('root') }}">关于</a></li>
                  <li class="wow fadeInRight"><a href="{{ route('root') }}">+友情链接</a></li>
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
              <h1 class="wow fadeInLeft">天尽头流浪博客</h1>
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
              <div class="footer-logo">
                <h2>ZQ个人博客</h2>
              </div>
              <p>世界那么大，我想去看看</p>
              <div class="button">
                <a href="{{ route('root') }}" class="btn layui-btn layui-btn-normal">About Me</a>
              </div>
            </div>
          </div>
          <!-- 其它链接 -->
          <div class="layui-col-xs12 layui-col-sm6 layui-col-md4">
            <div class="single-widget">
              <h2>相关链接</h2>
              <ul class="social-icon">
                <li class="active"><a href="{{ route('root') }}"><i class="fa fa-book"></i>博文</a></li>
                <li class="active"><a href="{{ route('root') }}"><i class="fa fa-comments"></i>留言</a></li>
                <li class="active"><a href="{{ route('root') }}"><i class="fa fa-share"></i>资源</a></li>
                <li class="active"><a href="{{ route('root') }}"><i class="fa fa-snowflake-o"></i>日记</a></li>
                <li class="active"><a href="{{ route('root') }}"><i class="fa fa-files-o"></i>归档</a></li>
              </ul>
            </div>
          </div>
          <!-- 联系我 -->
          <div class="layui-col-xs12 layui-col-sm12 layui-col-md4">
            <div class="single-widget contact">
              <h2>联系我</h2>
              <ul class="list">
                <li><i class="fa fa-map"></i>地址:深圳市南山区</li>
                <li><i class="fa fa-qq"></i>QQ: 1435469178 </li>
                <li><i class="fa fa-envelope"></i>邮箱: 1435469178@qq.com</li>
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
            <p>Copyright &copy; 2019-2020 天尽头流浪 All Rights Reserved V.5.1.3 粤ICP备1231100号</p>
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
