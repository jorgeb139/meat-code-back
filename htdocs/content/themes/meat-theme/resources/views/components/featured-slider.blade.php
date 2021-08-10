<section class="featured-slider section">
  <div class="container">
    @include('components.section-heading')

    <div class="slider">
      <div class="slider__list row js-featured-slider">
        @foreach ($items as $item)
        <div class="slider__item col">
          @include('components.post-card', $item)
        </div>
        @endforeach
      </div>

      <div class="slider__nav">
        @include('components.slider-nav')
      </div>
    </div>
  </div>
</section>
