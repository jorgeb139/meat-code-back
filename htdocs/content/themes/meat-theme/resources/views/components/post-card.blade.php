<article class="post-card">
  <a href="{{ $url }}">
    <figure>
      <img class="img-fluid" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
    </figure>
  </a>

  <div class="post-card__content">
    @if(!empty($category))
    <p class="label text--s fw-bold mb-2"><i class="material-icons me-1">bookmark</i> {{ $category }}</p>
    @endif
    @if(!empty($title))
    <h3 class="title title--m">
      <a href="{{ $url }}">{{ $title }}</a>
    </h3>
    @endif
    @if(!empty($date))
    <p class="label text text--s fw-bold mt-3 mb-0">{{ $date }}</p>
    @endif
  </div>
</article>
