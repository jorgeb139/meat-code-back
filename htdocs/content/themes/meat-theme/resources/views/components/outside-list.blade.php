<section class="outside-list section">
  <div class="container">
    <div class="row">
      @foreach ($items as $item)
      <div class="col-lg-6">
        @include('components.outside-card', $item)
      </div>
      @endforeach
    </div>
  </div>
</section>
