<section class="color-icons section">
  <div class="container">
    @if(!empty($title))
    @include('components.section-heading', [
      'title' => $title,
      'button' => false,
    ])
    @endif

    <div class="row">
      @foreach ($items as $item)
      <div class="col-lg-3">
        @include('components.color-icon-card', $item)
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
