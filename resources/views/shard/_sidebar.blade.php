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
        @foreach ($categories as $value)
        <li data-index="{{ $value->id + 1 }}"><a href="{{ route('topics.index') }}">{{ $value->name }}</a></li>
        @endforeach
      </ul>
    </div>

    <!--右边悬浮 平板或手机设备显示-->
    <div class="category-toggle"><i class="layui-icon">&#xe603;</i></div>
    <div class="article-category">
      <div class="article-category-title">分类导航</div>
        @foreach ($categories as $value)
        <a href="{{ route('topics.index') }}">{{ $value->name }}</a>
        @endforeach
      <div class="f-cb"></div>
    </div>
    <div class="blog-mask animated layui-hide"></div>

    <!--热门文章-->
    <div class="other-item">
      <h5 class="other-item-title">热门文章</h5>
      <div class="inner">
        <ul class="hot-list-article">
          <li> <a href="{{ route('topics.index') }}">热门一</a></li>
          <li> <a href="{{ route('topics.index') }}">热门二</a></li>
          <li> <a href="{{ route('topics.index') }}">热门三</a></li>
          <li> <a href="{{ route('topics.index') }}">热门四</a></li>
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
            <cite>访客一</cite>
          </a></dd>
          <dd><a href="{{ route('topics.index') }}">
            <img src="{{ URL::asset('images/wu.jpg') }}">
            <cite>访客二</cite>
          </a></dd>
          <dd><a href="{{ route('topics.index') }}">
            <img src="{{ URL::asset('images/wu.jpg') }}">
            <cite>访客三</cite>
          </a></dd>
        </dl>
      </div>
    </div>
  </div>
</div>
