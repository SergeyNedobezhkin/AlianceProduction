<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
  <script src="./js/main.js" defer></script>
  <script src="./js/blog-slider.js" defer></script>
  <script src="./js/features-slider.js" defer></script>
  <script src="./js/step-slider.js" defer></script>
  <script src="./js/blog-slider-page.js" defer></script>


  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/just-validate.production.min.js"></script>
  <script src="./js/phoneInput.js" defer></script>
  <script src="./js/favicon.js"></script>
  <title>Aliance Production</title>
</head>

<body class="front-page">
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contractProduction.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a href="./productAvtohim.php" class="mobile-submenu-link">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./ownProduct.php" class="mobile-menu-link">Собственные марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a href="./productAgTech.php" class="mobile-submenu-link">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a href="#" class="mobile-submenu-link">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./blog.php" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="phone-icon" width="24" height="24">
        <use href="./img/sprite.svg#mark"></use>
      </svg>
      <address class="mobile-info-address">
        г. Мосвка, Холодильный пер. 4к1с8
      </address>
    </div>
    <div class="mobile-info">
      <svg class="phone-icon" width="24" height="24">
        <use href="./img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <div class="mobile-socialNetwork">
      <a href="#" class="mobile-vk">
        <svg class="vk" width="24" height="24">
          <use href="./img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="mobile-inst">
        <svg class="vk" width="24" height="24">
          <use href="./img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
  </div>
  <nav class="navbar">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="./img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="./img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="./contractProduction.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./ownProduct.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="./blog.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="./contacts.php" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="./img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24" height="24">
        <use href="./img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
      </div>
      <?php include_once('./template-parts/header-features-slider-block.php'); ?>
    </div>
  </header>
  <?php $block_title = 'собственные торговые марки';

  $founder_button_link = "founder-button-link";
  $block_title_production = 'Контрактное производство';
  $production_contractProduction_main = "production-contractProduction-main";
  $block_title_blogMore = 'Блог экспертов в области производства';
  include_once('./template-parts/section-light-block.php');
  include_once('./template-parts/production-block.php');
  include_once('./template-parts/trademarks-block.php');
  include_once('./template-parts/founder-block.php');
  include_once('./template-parts/clients-block.php');
  include_once('./template-parts/blog-slider-block.php'); ?>
  <?php include_once('./template-parts/cta-block.php'); ?>
  <?php include_once('footer.php'); ?>
</body>

</html>