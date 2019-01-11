@if (session()->has('successMessage'))
  <div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box has-text-centered">
        <p>{{ session()->get('successMessage') }}</p>
      </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>
@endif
<section class="section product">
  <div class="container">
    <div class="columns">
      <div class="column is-7">
        <div class="product-gallery">
          <div class="screen"><img src="{{ asset('./img/products/product-1.jpg') }}" alt=""/></div>
          <div class="thumbs">
            <div class="thumbs__item is-active"><a href="#"><img src="{{ asset('./img/products/product-1.jpg') }}" alt=""/></a></div>
            <div class="thumbs__item"><a href="#"><img src="{{ asset('./img/products/product-3.jpg') }}" alt=""/></a></div>
            <div class="thumbs__item"><a href="#"><img src="{{ asset('./img/products/product-2.jpg') }}" alt=""/></a></div>
            <div class="thumbs__item"><a href="#"><img src="{{ asset('./img/products/product-1.jpg') }}" alt=""/></a></div>
            <div class="thumbs__item"><a href="#"><img src="{{ asset('./img/products/product-1.jpg') }}" alt=""/></a></div>
          </div>
        </div>
      </div>
      <div class="column is-5">
        <div class="product-info">
          <h2 class="title product__title">{{ $product->title }}</h2>
          <div class="price">
            @if ($product->price_new == $product->price_old)
              <p class="product__price product__price_new">{{ $product->presentPrice($product->price_new) }}</p>
            @else
              <p class="product__price product__price_new">{{ $product->presentPrice($product->price_new) }}</p>
              <p class="product__price product__price_old">{{ $product->presentPrice($product->price_old) }}</p>
            @endif
          </div>
          <div class="rating">
            <div data-rating='4' class="rating__stars"><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="far fa-star"></i></span></div>
            <div class="rating__feedbacks"><a href="#">15 отзывов</a></div>
          </div>
          <div class="description">
            <p>{{ $product->description }}</p>
          </div>
          <div class="additional size">
            <p class="size__title">Выберите размер:</p>
            <div class="buttons"><a href="#" class="button">XS</a><a href="#" class="button">S</a><a href="#" class="button">M</a><a href="#" class="button">L</a><a href="#" class="button">XL</a></div>
          </div>
          <div class="additional colors">
            <p class="size__title">Выберите цвет:</p>
            <div class="buttons"><a href="#" class="button is-small is-rounded color"><span class="color_red"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_green"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_dark"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_yellow"></span></a><a href="#" class="button is-small is-rounded color"><span class="color_white"></span></a></div>
          </div>
          <form class="add-to-cart" action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="title" value="{{ $product->title }}">
            <input type="hidden" name="price_new" value="{{ $product->price_new }}">
            <input type="submit" class="button is-primary to-cart" value="В корзину">
            <a href="#" class="one-click">Купить в один клик</a>
          </form>
          <div class="feedbacks">
            <div class="feedbacks__header">
              <p>Отзывы:</p>
              <div class="feedbacks__nav"><a href="#" class="prev"><i class="fas fa-chevron-left"></i></a><a href="#" class="next"><i class="fas fa-chevron-right"></i></a></div>
            </div>
            <div class="feedbacks__screen owl-carousel">
              <div class="feedback">
                <div class="feedback__header">
                  <p class="feedback__name">Анна Петренко</p>
                  <div class="rating">
                    <div data-rating='4' class="rating__stars"><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="far fa-star"></i></span></div>
                  </div>
                </div>
                <div class="feedback__date has-text-grey-light is-size-7">
                  <p>28/12/2018</p>
                </div>
                <div class="feedback__text">
                  <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Встретил океана сбить злых букв своего большого все заглавных текстами?</p>
                </div>
              </div>
              <div class="feedback">
                <div class="feedback__header">
                  <p class="feedback__name">Анна Петренко</p>
                  <div class="rating">
                    <div data-rating='4' class="rating__stars"><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="far fa-star"></i></span></div>
                  </div>
                </div>
                <div class="feedback__date has-text-grey-light is-size-7">
                  <p>28/12/2018</p>
                </div>
                <div class="feedback__text">
                  <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Встретил океана сбить злых букв своего большого все заглавных текстами?</p>
                </div>
              </div>
              <div class="feedback">
                <div class="feedback__header">
                  <p class="feedback__name">Анна Петренко</p>
                  <div class="rating">
                    <div data-rating='4' class="rating__stars"><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="fas fa-star"></i></span><span class="rating__star"><i class="far fa-star"></i></span></div>
                  </div>
                </div>
                <div class="feedback__date has-text-grey-light is-size-7">
                  <p>28/12/2018</p>
                </div>
                <div class="feedback__text">
                  <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Встретил океана сбить злых букв своего большого все заглавных текстами?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>