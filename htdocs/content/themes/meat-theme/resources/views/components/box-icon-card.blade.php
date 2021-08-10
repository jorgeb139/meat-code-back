<article class="box-icon-card">
  <div class="box-icon-card__icon">
    <i class="material-icons">{{ $icon }}</i>
  </div>
  @if(!empty($title))
  <h3 class="title mt-6 px-5">{{ $title }}</h3>
  @endif
  @if(!empty($text))
  <div class="text text--s mt-4">{!! $text !!}</div>
  @endif
</article>
