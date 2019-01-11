<div class="column is-6-mobile is-3-tablet"><a href="{{ route('product.show', $product->slug) }}" class="product-link">
    <div class="product-img"><img src="./img/products/product-1.jpg" alt=""/></div><span class="product-link__title">{{ $product->title }}</span>
    @if ($product->price_new == $product->price_old)
      <span class="product-link__price product-link__price_new">{{ $product->presentPrice($product->price_new) }}</span>
    @else
      <span class="product-link__price product-link__price_new">{{ $product->presentPrice($product->price_new) }}</span>
      <span class="product-link__price product-link__price_old">{{ $product->presentPrice($product->price_old) }}</span>
      <span class="product-link__marker product-link__marker_sale">Sale</span>
    @endif
    <span class="button to-cart is-primary is-small">В корзину</span></a>
</div>