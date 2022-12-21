<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="include" data-include="">
  <div class="container">
    <div class="include__inner">
      <div class="include__item">
		    <?php the_sub_field( 'include-left' ); ?>
      </div>
      <div class="include__item include__list">
		    <?php the_sub_field( 'include-right' ); ?>
      </div>
    </div>
  </div>
</section>
