<section class="logos-slider section">
  <div class="container">
    @include('components.section-heading')

    <div class="slider">
      <div class="slider__list row js-logos-slider">
        @foreach ($items as $item)
        <div class="slider__item col">
          <div class="logos-slider__card">
            @if(!empty($item['url']))
            <a href="{{ $item['url'] }}">
            @endif
              <figure>
                <img class="img-fluid" src="{{ $item['img']['src'] }}" alt="{{ $item['img']['alt'] }}">
              </figure>
            @if(!empty($item['url']))
            </a>
            @endif
          </div>
        </div>
        @endforeach
      </div>

      <div class="slider__nav">
        @include('components.slider-nav')
      </div>
    </div>
  </div>
</section>
