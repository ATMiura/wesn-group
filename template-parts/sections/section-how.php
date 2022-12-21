<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="how">
  <div class="container">
    <div class="how__heading heading heading--1"><?php the_sub_field('how-title'); ?></div>

    <div class="how__cards">
      <ol class="how__list">
		  
		  <?php if (have_rows('how-cards')) : ?>
			  <?php while (have_rows('how-cards')) : the_row(); ?>

              <li class="how__list-item">
                <div class="how__card">
                  <p class="how__text how__text--gray">
					  <?php the_sub_field('how-cards-title'); ?>
                  </p>
                  <p class="how__text"><?php the_sub_field('how-cards-text'); ?></p>
                </div>
              </li>
			  
			  <?php endwhile; ?>
		  <?php endif; ?>

      </ol>
    </div>

    <div class="how__download">
		<?php if (have_rows('dokumenty')) : ?>
			<?php while (have_rows('dokumenty')) : the_row(); ?>
				<?php $dokument = get_sub_field('dokument'); ?>
				<?php if ($dokument) { ?>
              <a href="<?php echo $dokument['url']; ?>" class="how__download-link"
                 target="_blank"
                 rel="nofollow noopener noreferrer">
                <div class="how__download-button button--o"><span class="how__download-text">.docx</span></div>
                <div class="how__download-text">Скачать <?php echo $dokument['title']; ?></div>
              </a>
				<?php } ?>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>

    <div class="how__button-wrapper">
      <button class="btn btn--accent hover-swap hover-swap--i" data-text="Отправить заявку"
              data-modal-trigger-request-calc
              data-target="clickform">
                <span class="btn-icon">
                    <img src="<?php echo $theme_url; ?>/assets/img/icons/arrow.svg" alt="Кнопка"/>
                </span>
        <span class="btn-text hover-swap-text">Отправить заявку</span>
      </button>
    </div>
  </div>
</section>
