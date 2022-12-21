<?php if ( have_rows( 'sections' ) ): ?>
	<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
		
		<?php if ( get_row_layout() == 'section-calc' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'calc' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-contacts' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'contacts' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-include' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'include' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-info' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'info' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-intro' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'intro' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-products' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'products' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-questions' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'questions' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-video-wrapper' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'video-wrapper' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-how' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'how' ); ?>
		
		<?php elseif ( get_row_layout() == 'section-why' ) : ?>
			<?php get_template_part( 'template-parts/sections/section', 'why' ); ?>
		<?php endif; ?>
	
	<?php endwhile; ?>
<?php endif; ?>
