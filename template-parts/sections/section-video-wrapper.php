<?php $theme_url = get_stylesheet_directory_uri(); ?>

<?php $video = get_sub_field('video'); ?>
<?php $video_poster = get_sub_field('video-poster'); ?>

<section class="video__wrapper">
  <?php if(get_sub_field( 'info-logo' ) || get_sub_field('info-text')) { ?>
    <section class="info" id="info">
		<?php $info_logo = get_sub_field( 'info-logo' ); ?>
      <div class="container">
        <div class="info__content">
          <div class="info__logo logo">
            <img src="<?php echo $info_logo['url']; ?>" alt="<?php echo $info_logo['alt']; ?>" />
          </div>

          <div class="info__text content">
			  <?php the_sub_field( 'info-text' ); ?>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
	
	<?php if(get_sub_field( 'services-title' ) || have_rows('services-items')) { ?>
    <section class="services" id="services">
      <div class="container">
        <div class="services__heading heading heading--1">
			<?php the_sub_field('services-title'); ?>
        </div>

        <ul class="services__cards">
          <?php if (have_rows('services-items')) : ?>
            <?php while (have_rows('services-items')) : the_row(); ?>
              
              <?php $services_items_logo = get_sub_field('services-items-logo'); ?>
              <?php $services_items_link = get_sub_field('services-items-link'); ?>
    
              <li class="services__card">
                <div class="services__card-inner">
                  <div class="services__icon">
                    <?php if ($services_items_logo) { ?>
                      <img src="<?php echo $services_items_logo['url']; ?>"
                           alt="<?php echo $services_items_logo['alt']; ?>"/>
                    <?php } ?>
                  </div>
                  <p class="services__title">
                    <a href="<?php echo $services_items_link['target']; ?>">
                      <?php the_sub_field('services-items-name'); ?>
                    </a>
                  </p>
                  <p class="services__text">
                    <?php the_sub_field('services-items-text'); ?>
                  </p>
                  <?php if(get_sub_field('services-items-link')) { ?>
                    <a href="<?php echo $services_items_link['target']; ?>"
                       class="intro__button btn hover-swap hover-swap--i">Подробнее
                      <div class="ink animate" style="height: 200px;width: 250px;top: -20px;"></div>
                    </a>
                  <?php } ?>
                
                </div>
              </li>
            
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </section>
  <?php } ?>

  <div class="video__layout">
    <div class="video__container">
      <video class="video__media" src="<?php echo $video['url']; ?>" autoplay="" playsinline=""
             webkit-playsinline=""
             autobuffer="" preload="auto" muted="" loop=""
             poster="<?php echo $video_poster['url']; ?>"></video>
    </div>
  </div>
</section>
