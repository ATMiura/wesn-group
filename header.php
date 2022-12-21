<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php $theme_url = get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
  <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="preload" href="<?php echo $theme_url; ?>/assets/fonts/navigo-regular.woff2" crossorigin="" as="font" type="font/woff2">
  <link rel="preload" href="<?php echo $theme_url; ?>/assets/fonts/navigo-bold.woff2" crossorigin="" as="font" type="font/woff2">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header" data-header="">
  <div class="mobile-menu" data-mobile-menu="">
    <div class="mobile-menu__navbar container">
      <ul class="mobile-menu__list">
        <li class="mobile-menu__list-item">
          <a href="/" class="mobile-menu__nav-link heading--1" data-mobile-menu-close="">
            Главная
          </a>
        </li>
        <li id="uslugibm" class="mobile-menu__list-item">
          <a href="#sub" class="mobile-menu__nav-link heading--1">
            Услуги
          </a>
          <ul id="sub" class="sub-menu">
            <li>
              <a href="/gruzoperevozki-iz-kitaya/zheleznodorozhnye-perevozki"
                 class="header__nav-link hover-swap" data-text="Железнодорожные перевозки">
                <span class="btn-text hover-swap-text">Железнодорожные перевозки</span>
              </a>
            </li>
            <li>
              <a href="/gruzoperevozki-iz-kitaya/morskie-perevozki"
                 class="header__nav-link hover-swap" data-text="Морские перевозки">
                <span class="btn-text hover-swap-text">Морские перевозки</span>
              </a>
            </li>
            <li>
              <a href="/gruzoperevozki-iz-kitaya/aviaperevozki" class="header__nav-link hover-swap"
                 data-text="Авиаперевозки">
                <span class="btn-text hover-swap-text">Авиаперевозки</span>
              </a>
            </li>
            <li>
              <a href="/gruzoperevozki-iz-kitaya/perevozki-avtotransportom"
                 class="header__nav-link hover-swap" data-text="Автоперевозки">
                <span class="btn-text hover-swap-text">Автоперевозки</span>
              </a>
            </li>
            <li>
              <a href="/konteynernie-perevozki" class="header__nav-link hover-swap"
                 data-text="Контейнерные перевозки">
                <span class="btn-text hover-swap-text">Контейнерные перевозки</span>
              </a>
            </li>
            <li>
              <a href="/predstavitel-v-kitae" class="header__nav-link hover-swap"
                 data-text="Представитель в Китае">
                <span class="btn-text hover-swap-text">Представитель в Китае</span>
              </a>
            </li>
            <li>
              <a href="/poisk-postavshhikov-v-kitae" class="header__nav-link hover-swap"
                 data-text="Поиск поставщиков">
                <span class="btn-text hover-swap-text">Поиск поставщиков</span>
              </a>
            </li>
            <li>
              <a href="/proizvodstvo-v-kitae" class="header__nav-link hover-swap"
                 data-text="Производство" в="" Китае"="">
              <span class="btn-text hover-swap-text">Производство в Китае</span>
              </a>
            </li>
            <li>
              <a href="/tamogennoe-oformlenie" class="header__nav-link hover-swap"
                 data-text="Таможенное оформление">
                <span class="btn-text hover-swap-text">Таможенное оформление</span>
              </a>
            </li>
            <li>
              <a href="/postavki-oborudovaniya-iz-kitaya" class="header__nav-link hover-swap"
                 data-text="Поставки оборудования из Китая">
                <span class="btn-text hover-swap-text">Поставки оборудования из Китая</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu__list-item">
          <a href="/#info" class="mobile-menu__nav-link heading--1" data-mobile-menu-close="">
            О компании
          </a>
        </li>
        <li class="mobile-menu__list-item">
          <a href="/#contacts" class="mobile-menu__nav-link heading--1" data-mobile-menu-close="">
            Контакты
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="header__underlay" data-header-underlay=""></div>

  <div class="header__inner">
    <a href="/" class="header__logo logo logo-hide">
      <img src="<?php echo $theme_url; ?>/assets/img/icons/wesngroup_color.svg" alt="WESN">
    </a>

    <div class="header__menu">
      <nav class="header__nav">
        <?php
		      my_nav_menu( [ 'theme_location'  => 'top' ] );
        ?>

        <?php /*
          <ul class="header__list">
            <li id="uslugib" class="header__list-item">
              <a class="header__nav-link hover-swap" data-text="Услуги">
                <span class="btn-text hover-swap-text">Услуги</span>
              </a>
              <div class="sub-menu">
                <ul>
                  <li>
                    <a href="/gruzoperevozki-iz-kitaya/zheleznodorozhnye-perevozki"
                       class="header__nav-link hover-swap" data-text="Железнодорожные перевозки">
                      <span class="btn-text hover-swap-text">Железнодорожные перевозки</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__list-item">
              <a href="/#info" class="header__nav-link hover-swap" data-text="О компании">
                <span class="btn-text hover-swap-text">О компании</span>
              </a>
            </li>
            <li class="header__list-item">
              <a href="/#contacts" class="header__nav-link hover-swap" data-text="Контакты">
                <span class="btn-text hover-swap-text">Контакты</span>
              </a>
            </li>
          </ul>
        */ ?>
        
      </nav>

      <button class="header__button header__button--menu button--secondary" data-mobile-menu-button="">
        <span class="menu-icon">
           <span class="menu-icon__line"></span>
           <span class="menu-icon__line"></span>
           <span class="menu-icon__line"></span>
        </span>

        <span class="menu-cross">
           <span class="menu-icon__line"></span>
           <span class="menu-icon__line"></span>
        </span>
      </button>

      <a class="header__button button--secondary mobile-hide" href="tel:<?php the_field( 'phone-first', 'option' ); ?>" data-target="clicktophone">
		    <?php the_field( 'phone-first', 'option' ); ?>
      </a>
      <a href="https://t.me/s_pankov"
         class="hover-swap hover-swap--i_l header__button header__button--call btn--accent social">
        <span class="header__button-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/telegram.svg" class="imgsocial" alt="Кнопка"></span>

      </a><a href="https://wa.me/79111425586"
             class="hover-swap hover-swap--i_l header__button header__button--call btn--accent social">
        <span class="header__button-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/whatsapp.svg" class="imgsocial" alt="Кнопка"></span>
      </a>
      <button class="hover-swap hover-swap--i_l header__button header__button--call btn--accent social"
              data-modal-trigger-call="" data-target="clickform">
        <span class="header__button-icon"><img src="<?php echo $theme_url; ?>/assets/img/icons/phone.svg" alt="Кнопка"></span>
      </button>
    </div>
  </div>
</header>
