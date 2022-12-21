<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Шаблон секций
 * Template Post Type: page, post
 */
get_header(); ?>

<?php /*
<section class="section section-text-content">
  <div class="container">
    <div class="section__head">
      <h1 class="page-header-title"><?php the_title(); ?></h1>
    </div>
	  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
        <div class="section__body">
          <div class="text-content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
            </article>
          </div>
        </div>
	  <?php endwhile; ?>
  </div>
</section>

*/ ?>

<?php get_template_part('template-parts/acf-flexible'); ?>

<?php get_footer(); ?>
