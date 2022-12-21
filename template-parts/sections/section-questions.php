<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="questions">
  <div class="container questions__container">
    <div class="questions__col">
      <div class="question__text-content">
        <div class="questions__heading heading heading--1">
          Остались
          вопросы?
        </div>

        <p class="questions__text">
          Оставьте заявку на бесплатную консультацию.<br>
          В процессе проведения консультации мы предложим варианты решения ваших задач.
        </p>
      </div>
    </div>

    <div class="questions__col">
      <form method="post" action="https://wesn.group/" class="questions__form form ajax_form" data-form="">
        <div class="questions__form-main form__main">
          <label for="questions-form-name" class="label">
            <span class="label__text">Имя *</span>
          </label>
          <div class="input-wrapper">
            <input name="name" class="input input--active-solid" id="questions-form-name" type="text" required=""
                   placeholder=" ">
          </div>
          <div class="input-error" data-input-error="name"></div>

          <label for="questions-form-email" class="label">
            <span class="label__text">E-mail *</span>
          </label>
          <div class="input-wrapper">
            <input name="email" class="input input--active-solid" id="questions-form-email" type="email" required=""
                   placeholder=" ">
          </div>

          <textarea name="text" class="visually-hidden" tabindex="-1"></textarea>

          <label for="questions-form-message" class="label">
            <span class="label__text">Сообщение *</span>
          </label>

          <textarea name="message" id="questions-form-message" class="textarea input input--active-solid mb-0"
                    required="" placeholder=" "></textarea>

          <div class="personal-data">Нажимая кнопку «Отправить», вы соглашаетесь на обработку персональных данных</div>

          <div class="questions__submit-container btn-container">
            <button class="btn btn--accent hover-swap hover-swap--i" type="submit" data-text="Отправить">
              <span class="btn-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/arrow.svg" alt="Подтвердить"></span>
              <span class="btn-text hover-swap-text">Отправить</span>
              <span class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px;">&nbsp;</span>
            </button>
          </div>
        </div>

        <div class="form__success">
          <div class="heading heading--2">Форма успешно отправлена</div>

          <p>Мы свяжемся с вами в ближайшее время</p>
          <br>

          <button class="btn btn--center btn--accent hover-swap" type="submit" data-text="Отправить еще"
                  data-form-reset="">
            <span class="btn-text hover-swap-text">Отправить еще</span>
          </button>
        </div>

        <div class="form__error">
          <div class="heading heading--2">Произошла ошибка</div>

          <p>Пожалуйста, попробуйте повторить отправку позже
            или свяжитесь с нами другим способом</p>
          <br>

          <button class="btn btn--center btn--accent hover-swap" type="submit" data-text="Попробовать еще раз"
                  data-form-reset="">
            <span class="btn-text hover-swap-text">Попробовать еще раз</span>
          </button>
        </div>

        <input type="hidden" name="af_action" value="b431f6a6a97778a2ad7391a5c5de880e">
      </form>
    </div>
  </div>
</section>
