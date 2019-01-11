
<section class="section home-catalog">
  <div class="container">
    <h2 data-mask="Популярное" class="section-title">- Лидеры продаж</h2>
    <div class="columns is-multiline is-mobile">
      @foreach ($products as $product)
        @include('components.product-link')
      @endforeach
    </div>
  </div>
</section>