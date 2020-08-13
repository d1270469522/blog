<div class="header">
</div>
<header class="gird-header">
  <div class="header-fixed">
    <div class="header-inner">
      <a href="javasript:;" class="header-logo" id="logo">Tianjintou Liulang</a>
      <nav class="nav" id="nav">
        <ul>
          <li><a href="{{ route('root') }}">首页</a></li>
          <li><a href="{{ route('topics.index') }}">博客</a></li>
          <li><a href="{{ route('root') }}">留言</a></li>
          <li><a href="{{ route('root') }}">日记</a></li>
          <li><a href="{{ route('root') }}">友链</a></li>
        </ul>
      </nav>
      @guest
        <a href="{{ route('login') }}" class="blog-user"><img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600"></a>
      @else
        <a href="{{ route('users.show', Auth::id()) }}" class="blog-user"><img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px"></a>
      @endif
    </div>
  </div>
</header>
