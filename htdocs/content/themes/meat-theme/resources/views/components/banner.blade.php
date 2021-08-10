<section class="banner section">
  <div class="container">
    <div class="banner__container img-rounded">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <figure class="banner__image">
            <img class="img-fluid img-rounded" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
            {{-- <span class="hero-card__circle"></span>
            <span class="hero-card__half"></span>
            <span class="hero-card__quarter"></span> --}}
          </figure>
        </div>

        <div class="col-lg-7">
          <div class="banner__content">
            @if(!empty($title))
            <h2 class="title title--l fw-bolder">{{ $title }}</h2>
            @endif
            @if(!empty($text))
            <div class="text mt-5">{!! $text !!}</div>
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
  </div>
</section>
