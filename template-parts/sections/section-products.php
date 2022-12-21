<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="products">

  <div class="container">
    <div class="products__heading products__heading--outside">С какими товарами мы работаем
    </div>
  </div>

  <div class="products__cards-container" data-hs="cards">
    <div class="product__sticky">
      <div class="products__cards-wrap container" data-hs-wrap="">
        <div class="products__heading products__heading--inside">С какими товарами мы работаем</div>

        <div class="products__cards" data-hs-content="">
          <?php if (have_rows('products-cards')) : ?>
            <?php while (have_rows('products-cards')) : the_row(); ?>
              
              <?php $products_cards_img = get_sub_field('products-cards-img'); ?>
            
              <div class="products__card-wrap" data-products-card="">
                <div class="products__card">
                  <div class="products__card-front">
                    <div class="products__card-title"><?php the_sub_field('products-cards-title'); ?></div>

                    <div class="products__card-bottom">
                      <div class="products__card-details">Подробнее</div>

                      <div class="products__card-img-wrap">
                        <img class="products__card-img" src="<?php echo $products_cards_img['url']; ?>"
                             alt="Оборудование и механизмы">
                      </div>
                    </div>
                  </div>

                  <div class="products__card-back">
                    <ul class="products__list">
                      <?php if (have_rows('products-cards-list')) : ?>
                        <?php while (have_rows('products-cards-list')) : the_row(); ?>
                          <li class="products__list-item">
                            <?php the_sub_field('products-cards-list-item'); ?>
                          </li>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
              
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="products__overlay" data-products-close=""></div>
	
	  <?php if (have_rows('products-cards')) : ?>
		  <?php while (have_rows('products-cards')) : the_row(); ?>

        <div class="products__mob-card container" data-products-card-back="">
          <div class="products__mob-card-inner">
            <button class="products__cross-wrap" data-products-close="">
              <span class="products__cross menu-cross">
                 <span class="menu-icon__line"></span>
                 <span class="menu-icon__line"></span>
             </span>
            </button>

            <div class="products__card-title products__card-title--back">
				      <?php the_sub_field('products-cards-title'); ?>
            </div>

            <ul class="products__list">
              <?php if (have_rows('products-cards-list')) : ?>
                <?php while (have_rows('products-cards-list')) : the_row(); ?>
                  <li class="products__list-item">
                    <?php the_sub_field('products-cards-list-item'); ?>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        
		  <?php endwhile; ?>
	  <?php endif; ?>
  </div>
</section>
