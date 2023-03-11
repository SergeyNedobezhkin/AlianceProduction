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
$page_title = 'Блог';
$header_style = "single-block";
$navbar_mobile = "navbar-mobile";
$header_style_blog_mobile = "header-style-blog-mobile";
$header_style_mobile = "header-style-mobile";
$mobile_style_menu_toggle = "mobile-style-menu-toggle";
include_once('./template-parts/header-page.php'); ?>
<section class="section blog blog-news ">
  <div class="container">
    <div class="swiper blog-slider-page blog-slider-news ">

      <div class="swiper-wrapper">

        <div class="swiper-slide blog-slider-inner">

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>


          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>
          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
        </div>
        <div class="swiper-slide blog-slider-inner">

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
        </div>
        <div class="swiper-slide blog-slider-inner">

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>


          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
        </div>
        <div class="swiper-slide blog-slider-inner">

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
        </div>
        <div class="swiper-slide blog-slider-inner">

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-photo.jpg" alt="blog-photo"
              class="blog-card-image">

            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>

          <a href="./blogMore.php" class=" blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>

          <a href="./blogMore.php" class="blog-card-page"><img src="img/blog/blog-post.jpg" alt="blog-post"
              class="blog-card-image">

            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
        </div>
      </div>


      <div class="page-blog-slider-footer">
        <div
          class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 1 swiper-pagination-bullet-mr" aria-current="true"></span>
          <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
          <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
          <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
          <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php include_once('./template-parts/cta-block.php'); ?>
<?php include_once('footer.php'); ?>