<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="why">
	<div class="why__intro">
		<div class="why__parallax-container" data-parallax-why data-parallax-speed="30">
			<div class="why__parallax-img "></div>
		</div>
		
		<div class="container">
			<div class="why__heading color-white">Почему вы захотите работать с нами</div>
		</div>
	</div>
	
	<div class="why__director">
	  <?php $why_director_photo = get_sub_field( 'why-director-photo' ); ?>
   
		<div class="container why__container">
			<div class="why__col">
				<div class="why__director-wrapper">
					<div class="why__photo">
            <img src="<?php echo $why_director_photo['url']; ?>" alt="<?php echo $why_director_photo['alt']; ?>" />
					</div>
					
					<div class="why__director-text">
						<p class="why__name"><?php the_sub_field( 'why-director-name' ); ?></p>
						<p class="why__position"><?php the_sub_field( 'why-director-position' ); ?></p>
					</div>
				</div>
			</div>
			
			<div class="why__col">
				<div class="why__quote">
					<div class="why__quote-icon">
						<img src="<?php echo $theme_url; ?>/assets/img/icons/icon_quote.svg" alt="Цитата">
					</div>
					<p>
			      <?php the_sub_field( 'why-director-text' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
 
	<?php if ( have_rows( 'whi-slider' ) ) : ?>
    <div class="why__slider">
      <div class="slider-why">
        <div class="glide__track why__track" data-glide-el="track">
          <ul class="glide__slides why__slides">
          
          <?php while ( have_rows( 'whi-slider' ) ) : the_row(); ?>
            <li class="glide__slide why__slide-wrapper">
              <div class="why__slide">
                <div class="why__title">
                    <?php the_sub_field( 'why-title' ); ?>
                </div>
                <p class="why__text">
                    <?php the_sub_field( 'why-text' ); ?>
                </p>
              </div>
            </li>
            <?php endwhile; ?>
            
          </ul>
        </div>
      </div>
      
      <div class="slider__progressbar slider__progressbar--black why__progressbar" data-slider-progressbar-why>
        <div class="slider__progressbar-line transition-right"></div>
      </div>
    </div>
	<?php endif; ?>
 
</section>

<?php /*
 
	<section class="calculation">
	  <div class="container">
		<div class="calculation__heading heading heading--1 color-white">
		  Заполните заявку и получите предложение за 24 часа
		</div>
	
		<div class="calculation__img-wrap">
		  <img class="calculation__img"
			   src="<?php echo $theme_url; ?>/assets/img/trade/kp.jpg"
			   alt="Пример коммерческого предложения"
			   data-calculation="">
		</div>
	
		<div class="calculation__btn-wrap">
		  <button class="btn hover-swap hover-swap--i"
				  data-text="Заказать калькуляцию"
				  data-modal-trigger-calculation>
			<span class="btn-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/arrow.svg"
										alt="Заказать калькуляцию"/></span>
			<span class="btn-text hover-swap-text">Заказать калькуляцию</span>
			<span class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px;">&nbsp;</span>
		  </button>
		</div>
	  </div>
	</section>
	
	<section id="otzivi" class="seo content content--black kontakti-sect gray">
	  <div class="container">
		<div class="colss">
		  <ul class="otzivi">
			<li>
			  <div class="why__title">Качество</div>
			  <div class="why__text">Нам важен и интересен каждый клиент и проект - вы получаете полную вовлеченность и
				внимание нашей команды
			  </div>
			</li>
			<li>
			  <div class="why__title">Ответственность</div>
			  <div class="why__text">Используем нестандартный подход к решению сложной задачи клиента – оптимизируем ваши
				затраты при условии безопасности предложенного варианта. Несем ответственность за свои решения
			  </div>
			</li>
			<li>
			  <div class="why__title">Гибкость</div>
			  <div class="why__text">Предлагаем различные варианты решения поставленной задачи. Мы адаптивны - можем вести
				как масштабный проект, так и доставить небольшую партию груза в кратчайшие сроки
			  </div>
			</li>
		  </ul>
		</div>
	  </div>
	</section>
 
*/ ?>
