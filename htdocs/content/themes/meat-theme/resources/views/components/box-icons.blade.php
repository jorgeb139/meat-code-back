<section class="box-icons section">
  <div class="container position-relative">
    @include('components.section-heading')

    <img class="box-icons__bullets" src="{{ themosis_theme_assets() . '/images/bullet-grid-horizontal-big.svg' }}" alt="Decoración">

    <div class="row">
      @foreach ($items as $item)
      <div class="col-lg-3">
        @include('components.box-icon-card', $item)
      </div>
      @endforeach
    </div>

    @if(!empty($button) && !empty($button['url']))
    <div class="text-center mt-10">
      <a class="button button--primary" href="{{ $button['url'] }}" target="{{ $button['target'] ?? '_self' }}">
        <span class="button__text">{{ $button['label'] ?? 'Ver más' }}</span>
      </a>
    </div>
    @endif
  </div>
</section>
