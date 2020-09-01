@extends('layouts.app')

@section('title', '话题列表')

@section('content')

<div class="container-fixed">
    <div class="col-content">
        <div class="inner">
            <article class="article-list bloglist" id="LAY_bloglist" >
              <!-- , ['topics' => $topics] -->
              @include('topics._topic_list')
            </article>
        </div>
    </div>
    @include('shard._sidebar')
</div>

@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::asset('css/topics.css') }}" />
@stop

@section('scripts')
  <script src="{{ URL::asset('js/yss/article.js') }}"></script>
@stop
