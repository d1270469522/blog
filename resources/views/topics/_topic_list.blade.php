@foreach($topics as $topic)
<section class="article-item zoomIn article">
  @if($topic->is_top == 1)
    <div class="fc-flag">置顶</div>
  @endif
  <h5 class="title">
    <span>【原创】</span>
    <a href="{{ route('topics.show', $topic->id) }}">{{ $topic->title }}</a>
  </h5>
  <div class="time">
    <span class="day">{{ date('d', strtotime($topic->created_at)) }}</span>
    <span class="month fs-18">{{ date('m', strtotime($topic->created_at)) }}<span class="fs-14">月</span></span>
    <span class="year fs-18 ml10">{{ date('Y', strtotime($topic->created_at)) }}</span>
  </div>
  <div class="content">
    <a href="{{ route('topics.show', $topic->id) }}" class="cover img-light">
      <img src="{{ $topic->image }}">
    </a>
    {{ $topic->desc }}
  </div>
  <div class="read-more">
    <a href="{{ route('topics.show', $topic->id) }}" class="fc-black f-fwb">继续阅读</a>
  </div>
  <aside class="f-oh footer">
    <div class="f-fl tags">
      <span class="fa fa-tags fs-16"></span>
      <a href="{{ route('categories.show', $topic->category->id) }}" class="tag">{{ $topic->category->name }}</a>
    </div>
    <div class="f-fr">
      <span class="read">
        <i class="fa fa-eye fs-16"></i>
        <i class="num">{{ $topic->view_count }}</i>
      </span>
      <span class="read">
        <i class="fa fa-comments fs-16"></i>
        <a href="{{ route('topics.show', 1) }}" class="num fc-grey">{{ $topic->reply_count }}</a>
      </span>
    </div>
  </aside>
</section>
@endforeach

