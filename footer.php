<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php $theme_url = get_stylesheet_directory_uri(); ?>

<div class="heights"></div>

<footer id="footer" class="footer">
  <div class="foot">
    <div class="foot-block one">
      <ul>
        <li><a href="https://wesn.group/o-kompanii">О компании</a></li>
        <li><a href="https://wesn.group/kontakty">Контакты</a></li>
        <li><a href="https://wesn.group/gruzoperevozki-iz-kitaya">Грузоперевозки</a></li>
        <li><a href="https://wesn.group/dostavka-i-obsluzhivanie-gruzov">Доставка товаров</a></li>
        <li><a href="https://wesn.group/poisk-postavshhikov-v-kitae">Поиск поставщиков</a></li>
        <li><a href="https://wesn.group/predstavitel-v-kitae">Представитель в Китае</a></li>
      </ul>
    </div>
    <div class="foot-block two">
      <ul>
        <li><a href="https://wesn.group/postavki-oborudovaniya-iz-kitaya">Поставки оборудования</a></li>
        <li><a href="https://wesn.group/proizvodstvo-v-kitae">Организация производства</a></li>
        <li><a href="https://wesn.group/proizvodstvo-v-kitae/oem-proizvodstvo">OEM производство</a></li>
        <li><a href="https://wesn.group/sklad-i-hranenie-tovarov">Склад и хранение</a></li>
        <li><a href="https://wesn.group/strahovanie-gruzov">Страхование грузов</a></li>
        <li><a href="https://wesn.group/tamogennoe-oformlenie">Таможенное оформление</a></li>


      </ul>
    </div>
    <div class="foot-block three">
      <ul>
        <li><a href="https://wesn.group/perevozka-sbornyix-gruzov-iz-kitaya-v-rossiyu">Сборные грузы</a></li>
        <li><a href="https://wesn.group/konteynernie-perevozki">Контейнерные перевозки</a></li>
        <li><a href="https://wesn.group/gruzoperevozki-iz-kitaya/multimodalnie-perevozki">Мультимодальные перевозки</a>
        </li>
        <li><a href="https://wesn.group/gruzoperevozki-iz-kitaya/zheleznodorozhnye-perevozki">Ж/Д перевозки</a></li>
        <li><a href="https://wesn.group/gruzoperevozki-iz-kitaya/perevozki-avtotransportom">Автоперевозки грузов</a>
        </li>
        <li><a href="https://wesn.group/gruzoperevozki-iz-kitaya/morskie-perevozki">Морские перевозки</a></li>

      </ul>
    </div>

    <div class="foot-block four footer__col footer__contacts">
      <div class="logo"><img src="<?php echo $theme_url; ?>/assets/img/icons/wesntrade_big_footer.svg" alt=""></div>
      <div class="footer__address">
        <p>Санкт-Петербург,<br>
          Октябрьская наб. 10к1, офис 10.4</p>
      </div>

      <div class="footer__phone">
        <div class="footer__link">
          <a href="tel:+78126706209" class="footer__tel" data-target="clicktophone">+7 (812) 670-62-09</a>
        </div>

        <div class="footer__link">
          <a href="tel:+78126706211" class="footer__tel" data-target="clicktophone">+7 (812) 670-62-11</a>
        </div>
      </div>

      <div class="footer__email">
        <div class="footer__link">
          <a href="mailto:logistic@wesn.group" class="footer__email-link"
             data-email-builder="[&quot;logistic&quot;, &quot;wesn.group&quot;]">logistic@wesn.group</a>
        </div>
      </div>

      <div class="footer__social social">
      </div>
    </div>
  </div>
  <div class="footer__copy-row">
    <div class="footer__copy">
      <span class="footer__copy-sign">©</span> Wesn Group 2022
    </div>

    <div class="pixeljam">
      Создано в
      <span class="pixeljam__can">
                        <span class="pixeljam__can-cap"></span>
                        <span class="pixeljam__can-body"></span>
                    </span>

      <span class="pixeljam__pixeljam">Pixeljam</span>

    </div>
  </div>
</footer>

<div id="multib">
  <div class="elements-list">
    <div class="location">
      <label for="pseudoBtn" class="btn"><img src="<?php echo $theme_url; ?>/assets/img/icons/multib.svg"
                                              alt="Мультикнопка"></label>
      <input type="checkbox" id="pseudoBtn">
      <div class="text">
        <ul>
          <!--<li><a href="weixin://dl/chat?sergeipankov"><div class="c"><img src="<?php echo $theme_url; ?>/assets/img/icons/wechat.svg" alt="Мультикнопка"></div></a></li>-->
          <li><a href="https://t.me/s_pankov">
              <div class="t"><img src="<?php echo $theme_url; ?>/assets/img/icons/telegram.svg" alt="Мультикнопка">
              </div>
            </a></li>
          <li><a href="https://wa.me/79111425586">
              <div class="w"><img src="<?php echo $theme_url; ?>/assets/img/icons/whatsapp.svg" alt="Мультикнопка">
              </div>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal__layout display-none opacity-0" data-modal-layout-calc="">
  <div class="modal__container">
    <div class="modal__close">
      <button class="btn--close" data-modal-close=""></button>
    </div>

    <div class="modal__title heading--2">
      Оставьте свои данные, и мы пришлем вам расчет
    </div>

    <div class="modal__content" data-form data-form-copy-to>
      <?php echo do_shortcode('[contact-form-7 id="10" title="Оставьте свои данные, и мы пришлем вам расчет"]'); ?>
    </div>
  </div>
</div>

<div class="modal__layout display-none opacity-0" data-modal-layout-call="">
  <div class="modal__container">

    <div class="modal__close">
      <button class="btn--close" data-modal-close=""></button>
    </div>

    <div class="modal__title heading--2">
      Оставьте свои данные, и мы вам перезвоним
    </div>

    <div class="modal__content" data-form>
      <?php echo do_shortcode('[contact-form-7 id="163" title="Оставьте свои данные, и мы вам перезвоним"]'); ?>
    </div>
  </div>
</div>

<div class="modal__layout display-none opacity-0" data-modal-layout-request-calc="">
  <div class="modal__container">
    <div class="modal__close">
      <button class="btn--close" data-modal-close=""></button>
    </div>

    <div class="modal__title heading--2 mb-0">
      Запросить расчет стоимости доставки и таможенного оформления
    </div>

    <div class="modal__subtitle">
      Заполните форму и получите полный расчет ставки по вашему грузу
    </div>

    <div class="modal__content" data-form="">
      <?php echo do_shortcode('[contact-form-7 id="166" title="Запросить расчет стоимости доставки и таможенного оформления"]'); ?>
    </div>
  </div>
</div>

<div class="backcall" data-backcall="">
  <a href="tel:+78126706209" class="backcall__btn btn btn--blue">
    <span class="backcall__btn-text btn-text">Позвонить</span>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
