<section class="hero-slider section p-0">
  <div class="slider js-hero-slider">
    @foreach ($items as $item)
    <div class="slider__item">
      @include('components.hero-card', $item)
    </div>
    @endforeach
  </div>
</section>
