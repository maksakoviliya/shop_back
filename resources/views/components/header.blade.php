
<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="columns">
        <div class="column is-6 is-hidden-touch"><a href="mailto:email@info.ru" class="header__mail">email@info.ru</a><a href="tel:+74995552263" class="header__phone">+7 499 555 22 63</a></div>
        <div class="column is-12 is-6-desktop has-text-right"><a href="#" class="header__link">Войти</a><a href="#" class="header__link">Регистрация</a></div>
      </div>
    </div>
  </div>
  <div class="header__navbar">
    <div class="container">
      <div class="custom__navbar is-flex">
        <div class="navbar__left"><a href="{{ route('homepage') }}" class="header__logo">Логотип</a></div>
        <div class="navbar__center is-hidden-touch">
          <nav class="navbar__menu">
            <ul>
              <li><a href="{{ route('homepage') }}">Главная</a></li>
              <li class="has-megamenu"><a href="{{ route('catalog') }}" data-target="megamenu">Каталог</a></li>
              <li><a href="#">О нас</a></li>
              <li><a href="#">Новости</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </nav>
        </div>
        <div class="navbar__right is-flex"><a href="{{ route('cart.index') }}" data-target="cart" class="header__cart">
            <svg enable-background="new 0 0 512 512" version="1.1" viewbox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="m509.87 89.6c-2.133-2.133-4.267-4.267-8.533-4.267h-405.33l-10.667-55.466c0-4.267-6.4-8.533-10.667-8.533h-64c-6.399-1e-3 -10.666 4.266-10.666 10.666s4.267 10.667 10.667 10.667h55.467l51.2 260.27c6.4 34.133 38.4 59.733 72.533 59.733h245.33c6.4 0 10.667-4.267 10.667-10.667s-4.267-10.667-10.667-10.667h-243.2c-17.067 0-34.133-8.533-42.667-23.467l311.47-42.666c4.267 0 8.533-4.267 8.533-8.533l42.667-170.67s0-4.267-2.133-6.4zm-59.734 166.4l-311.47 40.533-38.4-192h386.13l-36.267 151.47z"></path>
              <path d="m181.33 384c-29.866 0-53.333 23.467-53.333 53.333 0 29.867 23.467 53.333 53.333 53.333 29.867 0 53.333-23.467 53.333-53.333 1e-3 -29.866-23.466-53.333-53.333-53.333zm0 85.333c-17.067 0-32-14.934-32-32s14.933-32 32-32 32 14.934 32 32-14.933 32-32 32z"></path>
              <path d="m394.67 384c-29.867 0-53.333 23.467-53.333 53.333 0 29.867 23.467 53.333 53.333 53.333 29.867 0 53.333-23.467 53.333-53.333s-23.467-53.333-53.333-53.333zm0 85.333c-17.067 0-32-14.934-32-32s14.933-32 32-32 32 14.934 32 32-14.934 32-32 32z"></path>
            </svg>
            @if (Cart::count()>0)
              <span class="badge">{{ Cart::count() }}</span>
            @endif
          </a><a href="#" class="header__hamburger"><span></span><span></span><span></span>
            </a></div>
      </div>
    </div>
    <div id="megamenu" class="megamenu">
      <div class="container">
        <div class="megamenu__inner">
          <div class="columns">
            <div class="column is-3">
              <div class="categories"><a href="#" data-target="handbags" class="is-active"><span class="icon"><img src="{{asset('./img/categories/handbag.svg')}}" alt=""/></span><span>Сумки</span></a><a href="#" data-target="backbags"><span class="icon"><img src="{{asset('./img/categories/backpack.svg')}}" alt=""/></span><span>Рюкзаки</span></a><a href="#"><span class="icon"><img src="{{asset('./img/categories/purse.svg')}}" alt=""/></span><span>Кошельки</span></a><a href="#"><span class="icon"><img src="{{asset('./img/categories/travel.svg')}}" alt=""/></span><span>Чемоданы</span></a><a href="#"><span class="icon"><img src="{{asset('./img/categories/belt.svg')}}" alt=""/></span><span>Ремни</span></a></div>
            </div>
            <div class="column is-9">
              <div class="categories__screen">
                <div id="handbags" class="subcategories is-active">
                  <div class="columns">
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-1.jpg') }}" class="subcategory"><span>Женские</span></a></div>
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-2.jpg') }}" class="subcategory"><span>Мужские</span></a></div>
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-3.jpg') }}" class="subcategory subcategory_short"><span>Спортивные</span></a><a href="#" style="background-image: url({{ asset('./img/banner/banner-4.jpg') }}" class="subcategory subcategory_short"><span>Для путешествий</span></a></div>
                  </div>
                </div>
                <div id="backbags" class="subcategories">
                  <div class="columns">
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-3.jpg') }}" class="subcategory subcategory_short"><span>Детские</span></a><a href="#" style="background-image: url({{ asset('./img/banner/banner-4.jpg') }}" class="subcategory subcategory_short"><span>Для путешествий</span></a></div>
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-2.jpg') }}" class="subcategory"><span>Текстильные</span></a></div>
                    <div class="column is-4"><a href="#" style="background-image: url({{ asset('./img/banner/banner-1.jpg') }}" class="subcategory"><span>Кожаные</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="cart" class="cart">
      <div class="container">
        @include('components.cart-inner')
      </div>
    </div>
  </div>
</header>