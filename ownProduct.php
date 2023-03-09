<?php
$page_title = 'Собственные торговые марки';
$header_style = "single-block";
$navbar_mobile = "navbar-mobile";
$mobile_style_menu_toggle = "mobile-style-menu-toggle";
$header_style_mobile = "header-style-mobile";
include_once('./template-parts/header-page.php'); ?>

<section class="trademark trademark-ownProduct">
  <div class="container">
    <?php
    if (!empty($block_title)) {
      echo ' <div class="seporator"></div>';
      echo '<h2 class="trademark-section-title">' . $block_title . '</h2>';
    }
    ?>
    <h2 class="section-title-small">собственные марки</h2>
    <div class="trademark-cards">
      <div class="trademark-card">
        <svg class="trademark-card-logo">
          <use href="./img/sprite.svg#AGTECH"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
          мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
      <div class="trademark-card">
        <svg class="trademark-card-logo">
          <use href="./img/sprite.svg#AP"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AP</h3>
        <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
          мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
    </div>
  </div>
</section>

<?php include_once('./template-parts/cta-block.php'); ?>
<?php include_once('footer.php'); ?>