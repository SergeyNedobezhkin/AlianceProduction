<?php
$page_title = 'О компании';
$header_style = "single-block";
$mobile_style_menu_toggle = "mobile-style-menu-toggle";
$header_style_mobile = "header-style-mobile";
$header_features_black = 'header-features-text-black';
$container_features_black = "container-features-black";
$founder_photo_about = "founder-photo-about";
$founder_about = "founder-about";
$navbar_mobile = "navbar-mobile";
// $founder_button_link = "founder-button-link";
$block_slider_arrow_internalPage = "block-slider-arrow-internalPage";
$block_title_blogMore_about = 'Исследовательский центр </br> Aliance production';
$block_title_blogMore_text_left = 'Явные признаки победы институционализации рассмотрены исключительно в разрезе
маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего
мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность
среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов.
Лишь
акционеры крупнейших компаний могут быть призваны к ответу.';
$block_title_blogMore_text_right = 'С учётом сложившейся международной обстановки, синтетическое тестирование
требует
определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что
высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как
самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны:
разбавленное
изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.';
include_once('./template-parts/header-page.php'); ?>

<div class="container">
  <section class="circle">
    <div class="circle-contant-wrapper">
      <img src="./img/circle.png" alt="circle" class="circle-photo">
      <div class="circle-contant">
        <div class="seporator"></div>
        <h2 class="section-title circle-title">мы - эксперты в области производства химии</h2>
        <p class="circle-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно
          фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры
          проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют
          собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно.
          Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании
          системы массового участия.</p>
      </div>
    </div>

</div>
</section>

<?php include_once('./template-parts/header-features-slider-block.php'); ?>
<?php include_once('./template-parts/ourProduction.php'); ?>
<?php include_once('./template-parts/founder-block.php'); ?>
<?php include_once('./template-parts/blog-slider-block.php'); ?>
<?php include_once('./template-parts/clients-block.php');
include_once('./template-parts/cta-block.php');
include_once('footer.php'); ?>