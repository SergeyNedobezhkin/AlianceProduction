<div class="container">
  <!-- Slider -->

  <div class="swiper features-slider">
    <!-- Additional required wrapper -->
    <?php
    if (!empty($header_features_black)) {
      echo '<ul class="swiper-wrapper header-features-black">';
    } else {
      echo '<ul class="swiper-wrapper header-features">';
    }
    ?>
    <!-- Slides -->
    <?php
    if (!empty($header_features_black)) {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#time"></use>
      </svg>
      <p class="header-features-text header-features-text-black">Непрерывная работа </br>c 2017 года</p>
    </li>';
    } else {
      echo ' <li class="swiper-slide header-features-item">
          <svg class="header-features-icon" width="36" height="36">
            <use href="./img/sprite.svg#time"></use>
          </svg>
          <p class="header-features-text">Непрерывная работа </br>c 2017 года</p>
        </li>';
    } ?>
    <?php
    if (!empty($header_features_black)) {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#certificates"></use>
      </svg>
      <p class="header-features-text header-features-text-black">Вся продукция сертифицирована</p>
    </li>';
    } else {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#certificates"></use>
      </svg>
      <p class="header-features-text">Вся продукция сертифицирована</p>
    </li>';
    } ?>
    <?php
    if (!empty($header_features_black)) {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#control"></use>
      </svg>
      <p class="header-features-text header-features-text-black">
        Контроль качества на всех этапах
      </p>
    </li>';
    } else {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#control"></use>
      </svg>
      <p class="header-features-text">
        Контроль качества на всех этапах
      </p>
    </li>';
    } ?>
    <?php
    if (!empty($header_features_black)) {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#delivery"></use>
      </svg>
      <p class="header-features-text header-features-text-black">
        Возможны поставки по всей России
      </p>
    </li>';
    } else {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#delivery"></use>
      </svg>
      <p class="header-features-text">
        Возможны поставки по всей России
      </p>
    </li>';
    } ?>
    <?php
    if (!empty($header_features_black)) {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#speed"></use>
      </svg>
      <p class="header-features-text header-features-text-black">Оперативное производство</p>
    </li>';
    } else {
      echo ' <li class="swiper-slide header-features-item">
      <svg class="header-features-icon" width="36" height="36">
        <use href="./img/sprite.svg#speed"></use>
      </svg>
      <p class="header-features-text">Оперативное производство</p>
    </li>';
    } ?>
    </ul>
    <?php
    if (!empty($header_features_black)) {
      echo '<div class="slider-buttons">
      <div class="slider-button-prev slider-button-prev-black">
        <svg width="36" height="24" >
          <use href="./img/sprite.svg#arrow-prev-black"></use>
        </svg>
      </div>
      <div class="slider-button-next slider-button-next-black">
        <svg width="36" height="24">
          <use href="./img/sprite.svg#arrow-next-black"></use>
        </svg>
      </div>
    </div>';
    } else {
      echo '<div class="slider-buttons">
      <div class="slider-button-prev">
        <svg width="36" height="24">
          <use href="./img/sprite.svg#arrow-prev"></use>
        </svg>
      </div>
      <div class="slider-button-next">
        <svg width="36" height="24">
          <use href="./img/sprite.svg#arrow-next"></use>
        </svg>
      </div>
    </div>';
    } ?>

  </div>
</div>