
<section class="section catalog">
  <div class="container">
    <div class="columns">
      <div class="column is-3"><a href="#" class="is-hidden-tablet filter-btn button is-fullwidth">Фильтр</a>
        <div class="filter">
          <p class="title is-4 is-hidden-mobile">Фильтр</p>
          <div class="filter__item">
            <p class="filter__title">По цене</p>
            <input type="text" name="my_range" value="" data-type="double" data-min="0" data-max="54000" data-step="1000" data-postfix="₽" class="js-range-slider"/>
          </div>
          <div class="filter__item">
            <p class="filter__title">По брэнду</p>
            <div class="buttons"><a href="#" class="button is-small">louis vuetton</a><a href="#" class="button is-small is-active">Boss</a><a href="#" class="button is-small is-active">Armani</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a><a href="#" class="button is-small">Bosco</a></div>
          </div>
          <div class="filter__item">
            <p class="filter__title">По Размеру</p>
            <div class="buttons"><a href="#" class="button is-small">XS</a><a href="#" class="button is-small">S</a><a href="#" class="button is-small">M</a><a href="#" class="button is-small">L</a><a href="#" class="button is-small">XL</a></div>
          </div>
          <div class="filter__item">
            <p class="filter__title">По цвету</p>
            <div class="buttons"><a href="#" class="button is-small is-rounded color"><span class="color_red"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_green"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_dark"> </span></a><a href="#" class="button is-small is-rounded color"><span class="color_yellow"></span></a><a href="#" class="button is-small is-rounded color"><span class="color_white"></span></a></div>
          </div>
          <div class="filter__item">
            <p class="filter__title">По материалу</p>
            <div class="buttons"><a href="#" class="button is-small">Кожа</a><a href="#" class="button is-small">Замша</a><a href="#" class="button is-small">Велюр</a></div>
          </div>
          <div class="filter__item"><a href="#" class="is-visible-mobile filter-btn button is-fullwidth is-success m-b-10">Применить</a><a href="#" class="is-visible-mobile filter-btn button is-fullwidth is-danger">Сбросить</a></div>
        </div>
      </div>
      <div class="column">
        <div class="title-block is-flex-tablet">
          <p class="title is-3">Название категории</p>
          <div class="sort-block is-flex">
            <p>Сортировать по: </p><a href="#" class="is-active">Цене</a>
            <div class="vertical-divider"></div><a href="#">Популярности</a>
          </div>
        </div>
        <div class="columns is-multiline is-mobile">
          @foreach ($products as $product)
            @include('components.product-link')
          @endforeach
        </div>
        <nav role="navigation" aria-label="pagination" class="pagination is-centered"><a href="#" class="pagination-previous"><i class="fas fa-chevron-left"></i></a><a href="#" class="pagination-next"><i class="fas fa-chevron-right"></i></a>
          <ul class="pagination-list is-hidden-mobile">
            <li><a aria-label="Goto page 1" class="pagination-link">1</a></li>
            <li><span class="pagination-ellipsis">…</span></li>
            <li><a aria-label="Goto page 45" class="pagination-link">45</a></li>
            <li><a aria-label="Page 46" aria-current="page" class="pagination-link is-current">46</a></li>
            <li><a aria-label="Goto page 47" class="pagination-link">47</a></li>
            <li><span class="pagination-ellipsis">…</span></li>
            <li><a aria-label="Goto page 86" class="pagination-link">86</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>