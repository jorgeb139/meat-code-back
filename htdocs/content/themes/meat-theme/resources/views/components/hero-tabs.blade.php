<section class="hero-tabs section">
  <div class="container">
    <nav class="text-center mb-10">
      <div class="nav nav-tabs mb-4" role="tablist">
        @foreach ($items as $item)
        <button
          class="nav-link {{ $loop->first ? 'active' : '' }}"
          id="nav-{{ $loop->iteration }}-tab"
          data-bs-toggle="tab"
          data-bs-target="#nav-{{ $loop->iteration }}"
          type="button"
          role="tab"
          aria-controls="nav-{{ $loop->iteration }}"
          aria-selected="{{ $loop->first ? 'true' : 'false' }}"
        >
          {{ $item['tab'] }}
        </button>
        @endforeach
      </div>
    </nav>
  </div>

  <div class="tab-content">
    @foreach ($items as $item)
    <div
      class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
      id="nav-{{ $loop->iteration }}"
      role="tabpanel"
      aria-labelledby="nav-{{ $loop->iteration }}-tab"
    >
        @include('components.hero-card', $item)
    </div>
    @endforeach
  </div>
</section>
