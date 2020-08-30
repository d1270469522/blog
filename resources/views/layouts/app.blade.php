<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'blog') - 个人博客</title>

  <!-- css -->
  <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('layui/css/layui.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/gloable.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/nprogress.css') }}" />

  @yield('styles')
</head>
<body>

  @include('layouts._header')

  <div class="doc-container" id="doc-container">

    @yield('content')

  </div>

  @include('layouts._footer')

  <!-- Scripts -->
  <script src="{{ URL::asset('layui/layui.js') }}"></script>
  <script src="{{ URL::asset('js/yss/gloable.js') }}"></script>
  <script src="{{ URL::asset('js/plugins/nprogress.js') }}"></script>
  <script>NProgress.start();</script>
  <script>
      window.onload = function () {
          NProgress.done();
      };
  </script>

  @yield('scripts')
</body>
</html>
