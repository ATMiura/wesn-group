<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="intro">
	
	<?php $intro_background = get_sub_field('intro-background'); ?>

  <div class="intro__parallax-container" data-parallax-intro="" data-parallax-speed="35">
    <div class="intro__parallax-img intro__parallax-img--log"
         style="background-image:url('<?php echo $intro_background['url']; ?>')"></div>
  </div>

  <div class="intro__container">
    <div class="intro__logo logo">
      <a class="logo" href="/">
        <img src="<?php echo $theme_url; ?>/assets/img/icons/wesngroup.svg" alt="WESN GROUP">
      </a>
    </div>

    <div class="intro__wrapper container">
      <h1 class="intro__heading heading heading--1 color-white"><?php the_title(); ?></h1>
      <div class="info__text content">
        <h2 id="tvpagetitleh2" class="titleh">
			<?php the_sub_field('intro-h2'); ?>
        </h2>
		  <?php the_sub_field('intro-text'); ?>
      </div>
      <a href="https://wesn.group/#calc" class="intro__button btn hover-swap hover-swap--i"
         data-text="<?php the_sub_field('intro-text-button'); ?>" data-modal-trigger-call="" data-target="clickform">
        <span class="btn-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/arrow.svg" alt="Кнопка"></span>
        <span class="btn-text hover-swap-text"><?php the_sub_field('intro-text-button'); ?></span>
        <div class="ink animate" style="height: 200px;width: 250px;top: -20px;left: -140px;"></div>
      </a>
    </div>
	  
	  
	  <?php if (have_rows('slider')) : ?>

      <div class="intro__slider-container">
        <div class="intro__slider" data-slider-intro>
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides intro__slides">
        
              <?php while (have_rows('slider')) : the_row(); ?>
                <?php $slide_icon = get_sub_field('slide-icon'); ?>
                <li class="glide__slide intro__slide glide__slide--active">
                    <div class="slider__slide">
                      <div class="slider__icon-container">
                        <img class="slider__icon" src="<?php echo $slide_icon['url']; ?>"
                             alt="<?php echo $slide_icon['alt']; ?>">
                      </div>
                      <p class="slider__text"><?php the_sub_field('slide-text'); ?></p>
            
            <?php if (have_rows('slide-dop-info')) : ?>
              <?php while (have_rows('slide-dop-info')) : the_row(); ?>

                            <div class="slider__info">
                <?php the_sub_field('slide-dop-info-text'); ?>
                            </div>
              
              <?php endwhile; ?>
            <?php endif; ?>

                    </div>
                  </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
        
        <div class="slider__progressbar" data-slider-progressbar-intro>
          <div class="slider__progressbar-line transition-right"></div>
        </div>
      </div>
    
	  <?php endif; ?>

</section>
