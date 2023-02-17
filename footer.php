<section class="cta">
  <div class="bg-grey section-cta">
    <img src="./img/cta.png" alt="call to action" class="cta-image">
    <div class="cta-form-wrapper container">
      <form action="./handler.php" method="POST" class="cta-form">
        <h3 class="section-title cta-form-title">Хотите сотрудничать?</h3>
        <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
          интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input id="user-name" class="input input-name" name="username" type="text" placeholder=" " maxlength="30"
              required />
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <div class="input-group">
            <input id="user-phone" class="input input-phone" name="userphone" type="tel" placeholder=" " maxlength="30"
              required />
            <label class="input-group-label" for="user-phone">Номер телефона</label>
          </div>
        </div>
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="./img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
              конфиденциальность информации!</p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <svg class="logo-svg footer-logo">
        <use href="./img/sprite.svg#logo"></use>
      </svg>
      <a href="tel:+79996861014" class="footer-phone">+7(999) 686-10-14</a>

      <div class="footer-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="./img/sprite.svg#mark"></use>
        </svg>
        <address class="footer-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>

      <div class="footer-info">
        <svg class="mail-icon" width="24" height="24">
          <use href="./img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>

      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="./img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="./img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <hr class="footer-seporator" />
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-menu-wrapper-1">
        <h2 class="footer-menu-title">Контрактное производство</h2>
        <ul class="footer-menu-list footer-menu-column-2">
          <li class="footer-menu-item">
            <a href="./productAvtohim.php" class="footer-menu-link">Автомобильная химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Бытовая химия</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Косметическая продукция</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
          </li>
        </ul>
      </div>

      <div class="footer-menu-wrapper-2">
        <h2 class="footer-menu-title">Собственные марки</h2>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="./productAgTech.php" class="footer-menu-link">Автохимия AG-Tech</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Автохимия AP</a>
          </li>
        </ul>
      </div>

      <div class="footer-menu-wrapper-3">
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
          </li>
          <li class="footer-menu-item">
            <a href="./blog.php" class="footer-menu-link footer-menu-link-bold">Новости</a>
          </li>
          <li class="footer-menu-item">
            <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <hr class="footer-seporator" />
  <div class="container">
    <div class="footer-wrapper">
      <div class="footer-legal">
        <p class="footer-copyright">
          &copy;
          <?php echo date('Y'); ?> «Aliance Production». Все права защищены.
        </p>
        <a href="./politic.php" class="footer-policy">Политики конфиденциальности</a>
      </div>
      <div class="footer-author">
        <span class="made-in">Сделано в</span>
        <span class=" made-developed">Дизайн и разработка:</span>
        <svg class="notify-icon" width="52" height="11">
          <use href="./img/sprite.svg#RUSO"></use>
        </svg>
      </div>
    </div>
  </div>
</footer>
<menu class="modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal">
      <svg class="close-icon" width="24" height="24">
        <use href="./img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
      вопросы и поможем даже в самых сложных случаях!</p>
    <form action="./handler.php" method = "POST" class="modal-form">

      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input id="modal-user-name" class="input input-name modal-input" name="username" type="text" placeholder=" ">
          <label class="input-group-label " for="modal-user-name">Имя</label>
        </div>
        <div class="input-group modal-input-group">
          <input id="modal-user-phone" class="input input-phone modal-input" name="userphone" type="tel" placeholder=" ">
          <label class="input-group-label " for="modal-user-phone">Номер телефона</label>
        </div>
      </div>
      <div class=" modal-form-footer">
        <button type="submit" class="button modal-form-button">Отправить заявку</button>
        <div class="notify modal-notify">
          <svg class="notify-icon" width="14" height="14">
            <use href="./img/sprite.svg#shield"></use>
          </svg>
          <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
            конфиденциальность информации!</p>
        </div>
      </div>

    </form>
  </div>
</menu>