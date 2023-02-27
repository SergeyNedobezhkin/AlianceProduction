<section class="section blog">
  <div class="container">
    <?php
    if (!empty($block_title_blogMore)) {
      echo ' <div class="seporator"></div>';
      echo '<h2 class="section-title blog-section-title">' . $block_title_blogMore . '</h2>';
    }
    if (!empty($block_title_blogMore_two)) {
      echo ' <div class="seporator"></div>';
      echo '<h2 class="section-title blog-section-title">' . $block_title_blogMore_two . '</h2>';
    }
    if (!empty($block_title_blogMore_about)) {
      echo ' <div class="seporator"></div>';
      echo '<h2 class="section-title blog-section-title">' . $block_title_blogMore_about . '</h2>';
    }
    ?>
    <?php
    if (!empty($block_title_blogMore_text_left && $block_title_blogMore_text_right)) {
      echo '<div class="blog-section-wrapper">
      <p class="blog-section-text-right blog-section-wrapper">' . $block_title_blogMore_text_right . '</p>
      <p class="blog-section-text-left blog-section-wrapper">' . $block_title_blogMore_text_left . '</p>
      </div>';
    } ?>
    <div class="swiper blog-slider">
      <div class="swiper-wrapper">
        <a href="./blogMore.php" class="swiper-slide blog-card">
          <picture class="blog-card-image">
            <source type="image/webp" srcset="img/blog/blog-photo.webp">
            <source type="image/jpg" srcset="img/blog/blog-photo.jpg">
            <img src="./img/blog/blog-photo.jpg" alt="blog-photo">
          </picture>
          <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
          <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
            ситуацию, в равной степени предоставлены...</p>
        </a>

        <a href="./blogMore.php" class="swiper-slide blog-card">
          <picture class="blog-card-image">
            <source type="image/webp" srcset="img/blog/blog-post.webp">
            <source type="image/jpg" srcset="img/blog/blog-post.jpg">
            <img src="./img/blog/blog-post.jpg" alt="blog-post">
          </picture>
          <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
          <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на
            независимые элементы. Безусловно, высокотехнологичная...</p>
        </a>
      </div>

      <div class="blog-slider-footer">
        <?php
        if (!empty($block_title_blogMore)) {
          echo '<a href="./blog.php" class="button-link blog-button-link">Весь блог</a>';
        } ?>
        <div class="blog-buttons primary-buttons-wrapper">
          <div class="blog-button-prev primary-button-prev">
            <svg width="36" height="24">
              <use href="./img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>

          <div class="blog-button-next primary-button-next">
            <svg width="36" height="24">
              <use href="./img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>