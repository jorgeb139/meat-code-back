<header class="section-heading text-center mb-10">
  <div
    class="{{ !empty($button) && !empty($button['url']) ? 'd-flex align-items-center justify-content-between' : '' }}"
  >
    @if(!empty($title))
    <h2 class="title title--l fw-bolder">{{ $title }}</h2>
    @endif
    @if(!empty($text))
    <div class="text mt-5 mx-auto max-width-reading">{!! $text !!}</div>
    @endif
    @if(!empty($button) && !empty($button['url']))
    <a class="button button--primary ms-3" href="{{ $button['url'] }}" target="{{ $button['target'] ?? '_self' }}">
      <span class="button__text">{{ $button['label'] ?? 'Ver más' }}</span>
    </a>
    @endif
  </div>
</header>
