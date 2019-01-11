
<section class="section">
  <div class="container">
    <h1 class="title">Корзина</h1>
    @if (Cart::count() > 0)
      <div class="columns is-multiline">
      <div class="column is-12-touch is-8-desktop">
        <table class="table is-fullwidth cart-table is-narrow">
          <thead>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Итого</th>
            <th></th>
          </thead>
          <tbody>
            @foreach (Cart::content() as $item)
              <tr>
              <td>
                <div class="cart-table__item is-flex"><a href="{{ route('product.show', $item->model->slug) }}" class="cart-table__img"><img src="./img/products/product-1.jpg" alt=""/></a>
                  <div class="cart-table__content"><a href="{{ route('product.show', $item->model->slug) }}" class="cart-table__title">{{ $item->model->title }}</a>
                    <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Размер: </span><span class="value">{{ $item->model->size }}</span></p>
                    <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Цвет: </span><span class="button is-small is-rounded color"><span class="color_{{ $item->model->color }}"> </span></span></p>
                  </div>
                </div>
              </td>
              <td>
                <p class="cart-table__price cart-table__price_item">{{ $item->model->presentPrice($item->model->price_new) }}</p>
              </td>
              <td>
                <div class="value-input cart-table__qty"><a href="#" class="value-input__change value-input__change_minus"><i class="fas fa-minus"></i></a>
                  <input type="text" value="1" class="input"/><a href="#" class="value-input__change value-input__change_plus"><i class="fas fa-plus"></i></a>
                </div>
              </td>
              <td>
                <p class="cart-table__price cart-table__price_total">{{ $item->model->presentPrice($item->model->price_new) }}</p>
              </td>
              <td>
                <form class="has-text-centered" action="{{ route('product.destroy', $item->rowId) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="cart-table__delete button is-danger is-outlined" type="submit">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="column is-12-touch is-4-desktop">
        @if (session()->has('successMessage'))
          <div class="notification is-danger">
            <button class="delete notification__close"></button>
            <p>{{ session()->get('successMessage') }}</p>
          </div>
        @endif
        <div class="box cart-total">
          <h2 class="cart-total__title subtitle">Оформление заказа</h2>
          <p>Сумма вашей покупки: </p>
          <p class="cart-total__price">{{ Cart::subtotal() }}</p>
          <p>{{ Cart::total() }}</p>
          <a href="#" class="button is-fullwidth is-primary">Оформить заказ</a>
        </div>
      </div>
    </div>
    @else
      <p>Корзина пуста</p>
    @endif
  </div>
</section>