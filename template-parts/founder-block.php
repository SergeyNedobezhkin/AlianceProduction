<section class="section founder  <?= $founder_about; ?>">
  <picture class="founder-photo">
    <source type="image/webp" srcset="img/found.webp">
    <source type="image/jpg" srcset="img/found.jpg">
    <img src="img/found.jpg" alt="founder" class="founder-photo <?= $founder_photo_about; ?>">
  </picture>
  <div class="container">
    <div class="founder-contant-wrapper">
      <div class="founder-contant">
        <div class="seporator"></div>
        <h2 class="section-title founder-title">Отношение к делу и к клиентам</h2>
        <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
          показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий
          активизации. Внезапно, независимые государства, которые представляют собой яркий пример
          континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых
          исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную
          потребность системы массового участия.
        </p>
        <p class="founder-text">А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
          ситуацию,
          в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный
          путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
        <?php
        if (!empty($founder_button_link)) {
          echo '<a href="#" class="button-link founder-button-link">Подробнее о компании</a>';

        }
        if (empty($founder_button_link_375)) {
          echo '<a href="#" class="button-link founder-button-link-small">О нашей миссии</a>';
        }
        ?>
      </div>
    </div>
  </div>
</section>