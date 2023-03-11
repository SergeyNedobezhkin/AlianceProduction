<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
<link rel="manifest" href="/img/favicons/site.webmanifest">
<link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">
<script>/*! modernizr 3.6.0 (Custom Build) | MIT *
* https://modernizr.com/download/?-webp-setclasses !*/
  !function (e, n, A) { function o(e, n) { return typeof e === n } function t(e) { var n = r.className, A = Modernizr._config.classPrefix || ""; if (l && (n = n.baseVal), Modernizr._config.enableJSClass) { var o = new RegExp("(^|\\s)" + A + "no-js(\\s|$)"); n = n.replace(o, "$1" + A + "js$2") } Modernizr._config.enableClasses && (n += " " + A + e.join(" " + A), l ? r.className.baseVal = n : r.className = n) } function a() { var e, n, A, t, a, i, r; for (var l in f) if (f.hasOwnProperty(l)) { if (e = [], n = f[l], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length)) for (A = 0; A < n.options.aliases.length; A++)e.push(n.options.aliases[A].toLowerCase()); for (t = o(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++)i = e[a], r = i.split("."), 1 === r.length ? Modernizr[r[0]] = t : (!Modernizr[r[0]] || Modernizr[r[0]] instanceof Boolean || (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])), Modernizr[r[0]][r[1]] = t), s.push((t ? "" : "no-") + r.join("-")) } } function i(e, n) { if ("object" == typeof e) for (var A in e) c(e, A) && i(A, e[A]); else { e = e.toLowerCase(); var o = e.split("."), a = Modernizr[o[0]]; if (2 == o.length && (a = a[o[1]]), "undefined" != typeof a) return Modernizr; n = "function" == typeof n ? n() : n, 1 == o.length ? Modernizr[o[0]] = n : (!Modernizr[o[0]] || Modernizr[o[0]] instanceof Boolean || (Modernizr[o[0]] = new Boolean(Modernizr[o[0]])), Modernizr[o[0]][o[1]] = n), t([(n && 0 != n ? "" : "no-") + o.join("-")]), Modernizr._trigger(e, n) } return Modernizr } var s = [], r = n.documentElement, l = "svg" === r.nodeName.toLowerCase(), f = [], u = { _version: "3.6.0", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function (e, n) { var A = this; setTimeout(function () { n(A[e]) }, 0) }, addTest: function (e, n, A) { f.push({ name: e, fn: n, options: A }) }, addAsyncTest: function (e) { f.push({ name: null, fn: e }) } }, Modernizr = function () { }; Modernizr.prototype = u, Modernizr = new Modernizr; var c; !function () { var e = {}.hasOwnProperty; c = o(e, "undefined") || o(e.call, "undefined") ? function (e, n) { return n in e && o(e.constructor.prototype[n], "undefined") } : function (n, A) { return e.call(n, A) } }(), u._l = {}, u.on = function (e, n) { this._l[e] || (this._l[e] = []), this._l[e].push(n), Modernizr.hasOwnProperty(e) && setTimeout(function () { Modernizr._trigger(e, Modernizr[e]) }, 0) }, u._trigger = function (e, n) { if (this._l[e]) { var A = this._l[e]; setTimeout(function () { var e, o; for (e = 0; e < A.length; e++)(o = A[e])(n) }, 0), delete this._l[e] } }, Modernizr._q.push(function () { u.addTest = i }), Modernizr.addAsyncTest(function () { function e(e, n, A) { function o(n) { var o = n && "load" === n.type ? 1 == t.width : !1, a = "webp" === e; i(e, a && o ? new Boolean(o) : o), A && A(n) } var t = new Image; t.onerror = o, t.onload = o, t.src = n } var n = [{ uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=", name: "webp" }, { uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==", name: "webp.alpha" }, { uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA", name: "webp.animation" }, { uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=", name: "webp.lossless" }], A = n.shift(); e(A.name, A.uri, function (A) { if (A && "load" === A.type) for (var o = 0; o < n.length; o++)e(n[o].name, n[o].uri) }) }), a(), t(s), delete u.addTest, delete u.addAsyncTest; for (var p = 0; p < Modernizr._q.length; p++)Modernizr._q[p](); e.Modernizr = Modernizr }(window, document);</script>
<?php
$page_title = 'Автомобильная химия';
$header_style = "single-block";
//Стили заголовка для мобильной версии
$navbar_mobile_button_avtohim = "navbar-mobile-button-avtohim";
$header_style_mobile = "header-style-mobile";
$mobile_style_menu_toggle = "mobile-style-menu-toggle";
$navbar_mobile = "navbar-mobile";
$header_style_mobile_avtohim = "header-style-mobile-avtohim";
$header_style_avtohim = "header-style-avtohim";

//Блок контрактное производство автомобильной химии
$founder_avtohim = "founder-production-avtohim";
$founder_avtohim_photo = "founder-production-avtohim-photo";
$founder_mobile_avtohim = "founder-production-mobile-avtohim";
$founder_avtohim_mobile_photo = "founder-production-avtohim-mobile-photo";
$founder_avtohim_mobile_title = "founder-avtohim-mobile-title";

//Блок features для белого фона
$container_features_black = "container-features-black";
$header_features_black = 'header-features-text-black';
$container_features_mobile_black = "container-features-mobile-black";


//Блок изготовление химии
$manufacture_avtohim_block = "manufacture-avtohim-block";
$manufacture_avtohim_block_container = "manufacture-avtohim-block-container";
$manufacture_avtohim_block_photo = "manufacture-avtohim-block-photo";

$manufacture_avtohim_mobile_block = "manufacture-avtohim-mobile-block";
$manufacture_avtohim_mobile_block_container = "manufacture-avtohim-mobile-block-container";
$manufacture_avtohim_mobile_block_photo = "manufacture-avtohim-mobile-block-photo";
$manufacture_avtohim_title_mobile_block = "manufacture-avtohim_title-mobile-block";
$manufacture_avtohim_text_mobile_block = "manufacture-avtohim-text-mobile-block";
$manufacture_avtohim_text_1_mobile_block = "manufacture-avtohim-text-1-mobile-block";
$manufacture_avtohim_list_block = "manufacture-avtohim-list-block";
$manufacture_avtohim_list_item_block = "manufacture-avtohim-list-item-block";
//Блок виды автохимии
$types_him_block = "types-him-block";
$types_him_block_container = "types-him-block-container";
$types_him_block_contant = "types-him-block-contant";
$types_him_block_list = "types-him-block-list";
$types_him_block_item = "types-him-block-item";
$types_him_block_text = "types-him-block-text";


$types_him_mobile_block = "types-him-mobile-block";
$types_him_mobile_block_container = "types-him-block-mobile-container";
$types_him_mobile_block_contant = "types-him-block-mobile-contant";
$types_him_mobile_block_title = "types-him-mobile-block-title";
$types_him_mobile_block_list = "types-him-block-mobile-list";
$types_him_mobile_block_item = "types-him-block-mobile-item";
$types_him_mobile_block_text = "types-him-block-mobile-text";




//блок слайдера "Исследовательский центр"
$block_slider_arrow_internalPage = "block-slider-arrow-internalPage";
$blog_slider_avtohim = "blog-slider-avtohim";
$slider_avtohim_mobile_block = "slider-avtohim-mobile-block";
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
$cta_mobile_block = "cta-mobile-block";
?>

<?php include_once('./template-parts/avtohim-page.php');
include_once('./template-parts/contract-production-avtohim-block.php');
include_once('./template-parts/header-features-slider-block.php');
include_once('./template-parts/manufactureAvtohimBlock.php');
include_once('./template-parts/typesHim-Block.php');
include_once('./template-parts/blog-slider-block.php');
include_once('./template-parts/section-light-block.php'); ?>



<section class=" clients clients-avtohim-block-client clients-avtohim-block-client-mobile">
  <div class="container clients-container">
    <div class="clients-wrapper">
      <div class="clients-contant ">
        <div class="seporator clients-seporator"></div>
        <h2 class="section-title clients-title">Производим аэрозольную продукцию для разных сфер</h2>
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#car"></use>
            </svg>
            Автомойки
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#eat"></use>
            </svg>
            Пищевая продукция
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#cosmetic"></use>
            </svg>
            Косметические средства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#car-cosm"></use>
            </svg>
            Автомобильная косметика
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#shirt"></use>
            </svg>
            Косметика по уходу за одеждой
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#boots"></use>
            </svg>
            Косметика по уходу за обувью
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#bricks"></use>
            </svg>
            Строительные материалы
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#more"></use>
            </svg>
            И многих других
          </li>
        </ul>
      </div>
      <div class="clients-logo-list">
        <a href="#" class="clients-logo-item">

          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
        <a href="#" class="clients-logo-item">
          <picture class="clients-logo">
            <source type="image/webp" srcset="img/client.webp">
            <source type="image/png" srcset="img/client.png">
            <img src="img/client.png" alt="client" class="clients-logo">
          </picture>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include_once('./template-parts/cta-block.php'); ?>
<?php include_once('footer.php'); ?>