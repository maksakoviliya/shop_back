<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/main.min.css"/>
    <script defer="defer" src="js/main.min.js"></script>
  </head>
  <body>
    <div class="side-menu">
      <form action="#" class="search form">
        <div class="field">
          <div class="control has-icons-right">
            <input type="text" placeholder="Поиск по сайту" class="input"/><span class="icon is-right"><span class="search-icon"></span></span>
          </div>
        </div>
      </form>
      <ul>
        <li><a href="#">Главная</a></li>
        <li class="has-submenu"><a href="#">Каталог</a>
          <ul>
            <li><a href="#">Женщинам</a></li>
            <li><a href="#">Мужчинам</a></li>
            <li><a href="#">Аксессуары</a></li>
          </ul>
        </li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </div>
    <div class="wrapper">
      <div class="wrapper__overlay"></div>
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
              <div class="navbar__left"><a href="#" class="header__logo">Логотип</a></div>
              <div class="navbar__center is-hidden-touch">
                <nav class="navbar__menu">
                  <ul>
                    <li><a href="#">Главная</a></li>
                    <li class="has-submenu"><a href="#" data-target="megamenu">Каталог</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                  </ul>
                </nav>
              </div>
              <div class="navbar__right is-flex"><a href="#" data-target="cart" class="header__cart">
                  <svg enable-background="new 0 0 512 512" version="1.1" viewbox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m509.87 89.6c-2.133-2.133-4.267-4.267-8.533-4.267h-405.33l-10.667-55.466c0-4.267-6.4-8.533-10.667-8.533h-64c-6.399-1e-3 -10.666 4.266-10.666 10.666s4.267 10.667 10.667 10.667h55.467l51.2 260.27c6.4 34.133 38.4 59.733 72.533 59.733h245.33c6.4 0 10.667-4.267 10.667-10.667s-4.267-10.667-10.667-10.667h-243.2c-17.067 0-34.133-8.533-42.667-23.467l311.47-42.666c4.267 0 8.533-4.267 8.533-8.533l42.667-170.67s0-4.267-2.133-6.4zm-59.734 166.4l-311.47 40.533-38.4-192h386.13l-36.267 151.47z"></path>
                    <path d="m181.33 384c-29.866 0-53.333 23.467-53.333 53.333 0 29.867 23.467 53.333 53.333 53.333 29.867 0 53.333-23.467 53.333-53.333 1e-3 -29.866-23.466-53.333-53.333-53.333zm0 85.333c-17.067 0-32-14.934-32-32s14.933-32 32-32 32 14.934 32 32-14.933 32-32 32z"></path>
                    <path d="m394.67 384c-29.867 0-53.333 23.467-53.333 53.333 0 29.867 23.467 53.333 53.333 53.333 29.867 0 53.333-23.467 53.333-53.333s-23.467-53.333-53.333-53.333zm0 85.333c-17.067 0-32-14.934-32-32s14.933-32 32-32 32 14.934 32 32-14.934 32-32 32z"></path>
                  </svg><span class="badge">25</span></a><a href="#" class="header__hamburger"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <div id="megamenu" class="megamenu">
            <div class="container">
              <div class="megamenu__inner">
                <div class="columns">
                  <div class="column is-3">
                    <div class="categories"><a href="#" data-target="handbags" class="is-active"><span class="icon"><img src="./img/categories/handbag.svg" alt=""/></span><span>Сумки</span></a><a href="#" data-target="backbags"><span class="icon"><img src="./img/categories/backpack.svg" alt=""/></span><span>Рюкзаки</span></a><a href="#"><span class="icon"><img src="./img/categories/purse.svg" alt=""/></span><span>Кошельки</span></a><a href="#"><span class="icon"><img src="./img/categories/travel.svg" alt=""/></span><span>Чемоданы</span></a><a href="#"><span class="icon"><img src="./img/categories/belt.svg" alt=""/></span><span>Ремни</span></a></div>
                  </div>
                  <div class="column is-9">
                    <div class="categories__screen">
                      <div id="handbags" class="subcategories is-active">
                        <div class="columns">
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-1.jpg')" class="subcategory"><span>Женские</span></a></div>
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-2.jpg')" class="subcategory"><span>Мужские</span></a></div>
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-3.jpg')" class="subcategory subcategory_short"><span>Спортивные</span></a><a href="#" style="background-image: url('./img/banner/banner-4.jpg')" class="subcategory subcategory_short"><span>Для путешествий</span></a></div>
                        </div>
                      </div>
                      <div id="backbags" class="subcategories">
                        <div class="columns">
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-3.jpg')" class="subcategory subcategory_short"><span>Детские</span></a><a href="#" style="background-image: url('./img/banner/banner-4.jpg')" class="subcategory subcategory_short"><span>Для путешествий</span></a></div>
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-2.jpg')" class="subcategory"><span>Текстильные</span></a></div>
                          <div class="column is-4"><a href="#" style="background-image: url('./img/banner/banner-1.jpg')" class="subcategory"><span>Кожаные</span></a></div>
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
              <div class="cart__inner">
                <div class="checkout-cart">
                  <div class="checkout-cart__items">
                    <div class="checkout-cart__item"><a href="#" class="checkout-cart__img"><img src="./img/products/product-1.jpg" alt=""/></a><a href="#" class="checkout-cart__content"><span class="checkout-cart__title">Далеко-далеко за словесными горами в стране, гласных и согласных.</span><span class="checkout-cart__additional checkout-cart__additional_size">XS</span><span class="checkout-cart__additional checkout-cart__additional_color">
                          <div class="button color is-rounded is-small"><span class="color_red"></span></div></span></a>
                      <p class="checkout-cart__price">20 000</p><a href="#" class="remove__btn button is-danger is-outlined"><span class="icon"><i class="fas fa-trash-alt"></i></span></a>
                    </div>
                    <div class="checkout-cart__item"><a href="#" class="checkout-cart__img"><img src="./img/products/product-3.jpg" alt=""/></a><a href="#" class="checkout-cart__content"><span class="checkout-cart__title">Далеко согласных.</span><span class="checkout-cart__additional checkout-cart__additional_size">XS</span><span class="checkout-cart__additional checkout-cart__additional_color">
                          <div class="button color is-rounded is-small"><span class="color_red"></span></div></span></a>
                      <p class="checkout-cart__price">20 000</p><a href="#" class="remove__btn button is-danger is-outlined"><span class="icon"><i class="fas fa-trash-alt"></i></span></a>
                    </div>
                    <div class="checkout-cart__item"><a href="#" class="checkout-cart__img"><img src="./img/products/product-2.jpg" alt=""/></a><a href="#" class="checkout-cart__content"><span class="checkout-cart__title">Далеко-далеко за словесными горами в стране, гласных и согласных.</span><span class="checkout-cart__additional checkout-cart__additional_size">XS</span><span class="checkout-cart__additional checkout-cart__additional_color">
                          <div class="button color is-rounded is-small"><span class="color_red"></span></div></span></a>
                      <p class="checkout-cart__price">20 000</p><a href="#" class="remove__btn button is-danger is-outlined"><span class="icon"><i class="fas fa-trash-alt"></i></span></a>
                    </div>
                  </div>
                </div>
                <div class="checkout-total m-b-15">
                  <div class="checkout-total__inner">
                    <div class="checkout-total__line">
                      <p class="checkout-total__label">Итого:</p>
                      <p class="checkout-total__value price">20 000</p>
                    </div>
                  </div>
                </div>
                <div class="checkout-form__section">
                  <div class="field is-grouped is-multiline">
                    <div class="control"><a href="#" class="button is-primary">Оформить заказ</a></div>
                    <div class="control"><a href="#" class="button is-info">Перейти в корзину</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="section dashboard">
        <div class="container">
          <div class="columns">
            <div class="column is-6">
              <h3 class="subtitle">Личные данные</h3>
              <div class="columns">
                <div class="column is-4">
                  <div class="box has-text-centered"><img src="./img/avatar.jpg" alt=""/><a href="#" class="button is-small is-success m-r-5"><span class="icon"><i class="fas fa-pen"></i></span></a><a href="#" class="button is-small is-danger"><span class="icon"><i class="fas fa-trash-alt"></i></span></a></div>
                </div>
                <div class="column is-8">
                  <div class="field is-horizontal">
                    <div class="field-label">
                      <label class="label">Имя</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control is-expanded">
                          <input type="text" class="input"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label">
                      <label class="label">Фамилия</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control is-expanded">
                          <input type="text" class="input"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label">
                      <label class="label">Пол</label>
                    </div>
                    <div class="field-body">
                      <div class="field is-narrow">
                        <div class="control">
                          <label class="radio">
                            <input type="radio" name="member"/> Ж
                          </label>
                          <label class="radio">
                            <input type="radio" name="member"/> М
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column is-1 is-hidden-touch">
              <div class="vertical-line"></div>
            </div>
            <div class="column is-5 is-6-touch">
              <h3 class="subtitle">Контактные данные</h3>
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Email</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control is-expanded">
                      <input type="mail" class="input"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Телефон</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control is-expanded">
                      <input type="tel" class="input"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Город</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control is-expanded">
                      <input type="tel" class="input"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Адрес</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control is-expanded">
                      <textarea class="textarea has-fixed-size"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column is-10"></div>
            <div class="column is-2"><a href="#" class="button is-primary m-l-a is-fullwidth">Сохранить</a></div>
          </div>
          <div class="columns is-multiline">
            <div class="column is-12 tabs">
              <ul>
                <li class="is-active"><a>Активные заказы</a></li>
                <li><a>Завершенные заказы</a></li>
                <li><a>Избранное</a></li>
              </ul>
            </div>
            <div class="column is-12 tabs-content">
              <div class="tab-content is-active">
                <table class="table is-fullwidth cart-table is-narrow">
                  <thead>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Итого</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p>120552</p>
                      </td>
                      <td>
                        <div class="cart-table__item is-flex"><a href="#" class="cart-table__img"><img src="./img/products/product-1.jpg" alt=""/></a>
                          <div class="cart-table__content"><a href="#" class="cart-table__title">Далеко-далеко за словесными горами в стране, гласных и согласных.</a>
                            <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Размер: </span><span class="value">XS</span></p>
                            <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Цвет: </span><span class="button is-small is-rounded color"><span class="color_red"> </span></span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="cart-table__price cart-table__price_item">20 000</p>
                      </td>
                      <td>
                        <p class="qty">1</p>
                      </td>
                      <td>
                        <p class="cart-table__price cart-table__price_total">20 000</p>
                      </td>
                      <td class="has-text-centered"><a href="#" class="cart-table__delete button is-danger is-outlined"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-content">
                <table class="table is-fullwidth cart-table is-narrow">
                  <thead>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Итого</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p>120552</p>
                      </td>
                      <td>
                        <div class="cart-table__item is-flex"><a href="#" class="cart-table__img"><img src="./img/products/product-3.jpg" alt=""/></a>
                          <div class="cart-table__content"><a href="#" class="cart-table__title">Далеко-далеко за словесными горами в стране, гласных и согласных.</a>
                            <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Размер: </span><span class="value">XS</span></p>
                            <p class="cart-table__additional is-inline-flex"><span class="cart-table__label">Цвет: </span><span class="button is-small is-rounded color"><span class="color_red"> </span></span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="cart-table__price cart-table__price_item">20 000</p>
                      </td>
                      <td>
                        <p class="qty">1</p>
                      </td>
                      <td>
                        <p class="cart-table__price cart-table__price_total">20 000</p>
                      </td>
                      <td class="has-text-centered"><a href="#" class="cart-table__delete button is-danger is-outlined"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="container">
          <div class="columns">
            <div class="column"><a href="#" class="footer__logo">Логотип</a></div>
            <div class="column">
              <h3 class="footer__column-title">Название колонки</h3><a href="#" class="footer__link">Ссылка</a>
            </div>
            <div class="column">
              <h3 class="footer__column-title">Название колонки</h3><a href="#" class="footer__link">Ссылка</a><a href="#" class="footer__link">Ссылка</a><a href="#" class="footer__link">Ссылка</a>
            </div>
            <div class="column">
              <h3 class="footer__column-title">Название колонки</h3><a href="#" class="footer__link">Ссылка</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>