<section class="content-image section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text--l">{!! $content !!}</div>

        <ul class="content-image__list">
        @foreach ($list as $item)
          <li class="content-image__item">
            <i class="material-icons">{{ $item['icon'] }}</i>
            {!! $item['text'] !!}
          </li>
        @endforeach
        </ul>
      </div>

      <div class="col-lg-5 offset-lg-1">
        <figure>
          <img class="img-fluid" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
        </figure>
      </div>
    </div>
  </div>
</section>
