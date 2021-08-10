<article class="hero-card">
  <div class="col-lg-6 offset-lg-6">
    <figure class="hero-card__image">
      <img class="img-fluid img-rounded img-rounded--l" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
      <span class="hero-card__circle"></span>
      <span class="hero-card__half"></span>
      <span class="hero-card__quarter"></span>
    </figure>
  </div>

  <div class="hero-card__content">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          @if(!empty($label))
          <p class="label text--s fw-bold mb-6">{{ $label }}</p>
          @endif
          @if(!empty($title))
          <h2 class="title title--xl fw-bolder">{{ $title }}</h2>
          @endif
          @if(!empty($text))
          <div class="text text--l mt-5">{!! $text !!}</div>
          @endif
          @if(!empty($button) && !empty($button['url']))
          <a class="button button--primary mt-8" href="{{ $button['url'] }}" target="{{ $button['target'] ?? '_self' }}">
            <span class="button__text">{{ $button['label'] ?? 'Ver más' }}</span>
          </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</article>
