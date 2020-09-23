<div class="header"></div>
<header class="gird-header">
  <div class="header-fixed">
    <div class="header-inner">
      <a href="javasript:;" class="header-logo" id="logo">你若盛开，蝴蝶自来～</a>
      <nav class="nav" id="nav">
        <ul>
          <li><a href="{{ route('root') }}">首页</a></li>
          <li><a href="{{ route('topics.index') }}">博客</a></li>
          <li><a href="{{ route('users.show', 1) }}">关于</a></li>
          <li><a href="{{ route('topics.create') }}">发布</a></li>
        </ul>
      </nav>
      @guest
        <a href="{{ route('login') }}" class="blog-user">
          <img src="{{ URL::asset('images/nologin.jpg') }}">
        </a>
      @else
        <a href="{{ route('users.show', Auth::id()) }}" class="blog-user">
          <img src="{{ !empty(Auth::user()->avatar) ? : URL::asset('images/nologin.jpg') }}">
        </a>
      @endif
      <a class="menu" id="header-menu">
        <i></i>
        <i></i>
        <i></i>
      </a>
    </div>
  </div>
</header>
