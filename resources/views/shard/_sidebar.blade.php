<div class="col-other">
  <div class="inner">


    <!-- 分类导航 -->
    <div class="other-item" id="categoryandsearch">
      <div class="search">
        <label class="search-wrap">
          <input type="text" id="searchtxt" placeholder="输入关键字搜索" />
          <span class="search-icon">
            <i class="fa fa-search"></i>
          </span>
        </label>
        <ul class="search-result"></ul>
      </div>
      <ul class="category mt20" id="category">
        <li data-index="0" class="slider"></li>
        <li data-index="1"><a href="{{ route('topics.index') }}">全部文章</a></li>
        <li data-index="2"><a href="{{ route('topics.index') }}">Java</a></li>
        <li data-index="3"><a href="{{ route('topics.index') }}">前端</a></li>
        <li data-index="3"><a href="{{ route('topics.index') }}">前端</a></li>
        <li data-index="3"><a href="{{ route('topics.index') }}">前端</a></li>
        <li data-index="3"><a href="{{ route('topics.index') }}">前端</a></li>
      </ul>
    </div>

    <!--右边悬浮 平板或手机设备显示-->
    <div class="category-toggle"><i class="layui-icon">&#xe603;</i></div>
    <div class="article-category">
      <div class="article-category-title">分类导航</div>
        <a href="{{ route('topics.index') }}">Java</a>
        <a href="{{ route('topics.index') }}">前端</a>
      <div class="f-cb"></div>
    </div>

    <!--热门文章-->
    <div class="blog-mask animated layui-hide"></div>
    <div class="other-item">
      <h5 class="other-item-title">热门文章</h5>
      <div class="inner">
        <ul class="hot-list-article">
          <li> <a href="{{ route('topics.index') }}">SpringBoot 入门爬虫项目实战</a></li>
          <li> <a href="{{ route('topics.index') }}">SpringBoot 2.x 教你快速入门</a></li>
          <li> <a href="{{ route('topics.index') }}">java学习路线</a></li>
          <li> <a href="{{ route('topics.index') }}">基于SpringBoot+JWT+Redis跨域单点登录的实现</a></li>
        </ul>
      </div>
    </div>

    <!--热门文章-->
    <div class="blog-mask animated layui-hide"></div>
    <div class="other-item">
      <h5 class="other-item-title">热门文章</h5>
      <div class="inner">
        <ul class="hot-list-article">
          <li> <a href="{{ route('topics.index') }}">SpringBoot 入门爬虫项目实战</a></li>
          <li> <a href="{{ route('topics.index') }}">SpringBoot 2.x 教你快速入门</a></li>
          <li> <a href="{{ route('topics.index') }}">java学习路线</a></li>
          <li> <a href="{{ route('topics.index') }}">基于SpringBoot+JWT+Redis跨域单点登录的实现</a></li>
        </ul>
      </div>
    </div>

    <!--热门文章-->
    <div class="blog-mask animated layui-hide"></div>
    <div class="other-item">
      <h5 class="other-item-title">热门文章</h5>
      <div class="inner">
        <ul class="hot-list-article">
          <li> <a href="{{ route('topics.index') }}">SpringBoot 入门爬虫项目实战</a></li>
          <li> <a href="{{ route('topics.index') }}">SpringBoot 2.x 教你快速入门</a></li>
          <li> <a href="{{ route('topics.index') }}">java学习路线</a></li>
          <li> <a href="{{ route('topics.index') }}">基于SpringBoot+JWT+Redis跨域单点登录的实现</a></li>
        </ul>
      </div>
    </div>

    <!-- 最近访客 -->
    <div class="other-item">
      <h5 class="other-item-title">最近访客</h5>
      <div class="inner">
        <dl class="vistor">
          <dd><a href="{{ route('topics.index') }}">
            <img src="{{ URL::asset('images/wu.jpg') }}">
            <cite>Anonymous</cite>
          </a></dd>
          <dd><a href="{{ route('topics.index') }}">
            <img src="{{ URL::asset('images/wu.jpg') }}">
            <cite>Dekstra</cite>
          </a></dd>
          <dd><a href="{{ route('topics.index') }}">
            <img src="{{ URL::asset('images/wu.jpg') }}">
            <cite>惜i</cite>
          </a></dd>
        </dl>
      </div>
    </div>
  </div>
</div>
