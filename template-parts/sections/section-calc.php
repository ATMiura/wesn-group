<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="calc">
  <div class="anchor" id="calc"></div>
  <div class="container">
    <div class="calc__container">
      <div class="calc__heading heading heading--1">Рассчитать бесплатно<br>стоимость доставки</div>

      <form class="calc__form" data-form-copy-from="calc">
        <div class="calc__row">
          <div class="calc__col">
            <label for="calc-form-dispatch" class="label">
              <span class="label__text">Город отправки *</span>
            </label>

            <div class="input-wrapper">
              <img class="input__icon" src="<?php echo $theme_url; ?>/assets/img/icons/location-marker.svg" alt="Иконка">
              <input class="input input--active-solid input--location suggestions__parent" id="calc-form-dispatch"
                     name="cityFrom" type="text" required="" data-calc-form-dispatch="" list="dispatch-suggestions"
                     autocomplete="off" placeholder=" " value="">
              <datalist class="suggestions__container" id="dispatch-suggestions"
                        data-dispatch-suggestions-container=""></datalist>
            </div>
          </div>

          <div class="calc__col">
            <label for="calc-form-arrival" class="label">
              <span class="label__text">Город прибытия *</span>
            </label>

            <div class="input-wrapper">
              <img class="input__icon" src="<?php echo $theme_url; ?>/assets/img/icons/location-marker.svg" alt="Иконка">
              <input class="input input--active-solid input--location suggestions__parent" id="calc-form-arrival"
                     type="text" name="cityTo" required="" data-calc-form-arrival="" list="arrival-suggestions"
                     autocomplete="off" placeholder=" " value="">
              <datalist class="suggestions__container" id="arrival-suggestions"
                        data-arrival-suggestions-container=""></datalist>
            </div>
          </div>
        </div>

        <div class="calc__row">
          <div class="calc__col">
            <label for="calc-form-product-name" class="label">
              <span class="label__text">Наименование груза *</span>
            </label>

            <div class="input-wrapper">
              <input class="input input--active-solid" id="calc-form-product-name" type="text" name="productName"
                     autocomplete="off" placeholder=" " required="">
            </div>
          </div>

          <div class="calc__col">
            <div class="calc__row calc__row--sm">
              <div class="calc__col calc__col--sm">
                <label for="calc-form-weight" class="label">
                  <span class="label__text">Вес, кг *</span>
                </label>

                <div class="input-wrapper">
                  <input class="input input--active-solid" id="calc-form-weight" type="tel" name="weight"
                         autocomplete="off" maxlength="20" placeholder=" " required="">
                </div>
              </div>

              <div class="calc__col calc__col--sm">
                <label for="calc-form-value" class="label">
                  <span class="label__text">Объем, м<sup>3</sup> *</span>
                </label>

                <div class="input-wrapper">
                  <input class="input input--active-solid" id="calc-form-value" type="tel" name="volume"
                         autocomplete="off" maxlength="20" required="" placeholder=" ">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="calc__row">
          <div class="calc__col calc__col--100">
            <div class="calc__radio-group">
              <label class="radio-l calc__radio">
                <input class="radio-l__input visually-hidden" type="radio" name="rate" value="1" required="">
                <span class="radio-l__btn"></span>
                <span class="label__text">Быстрее</span>
              </label>

              <label class="radio-l calc__radio">
                <input class="radio-l__input visually-hidden" type="radio" name="rate" value="2" checked="">
                <span class="radio-l__btn"></span>
                <span class="label__text">Все варианты</span>
              </label>

              <label class="radio-l calc__radio">
                <input class="radio-l__input visually-hidden" type="radio" name="rate" value="3">
                <span class="radio-l__btn"></span>
                <span class="label__text">Дешевле</span>
              </label>
            </div>


          </div>
        </div>

        <div class="calc__row">
          <div class="calc__col">
            <button class="calc__submit btn btn--dark hover-swap hover-swap--i" id="order-calculation" type="submit"
                    data-text="Расcчитать" data-calc-form-modal-open="" data-target="clickform">
                            <span class="btn-icon">
                                <img src="<?php echo $theme_url; ?>/assets/img/icons/arrow-white.svg" alt="Подтвердить">
                            </span>

              <span class="btn-text hover-swap-text">Расcчитать</span>
              <span class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px;">&nbsp;</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
