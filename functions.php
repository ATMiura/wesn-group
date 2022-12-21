<?php

add_theme_support('title-tag');

register_nav_menus(array(
	'top' => 'Верхнее',
	'bottom' => 'Внизу'
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 150);


function add_image_sizes()
{
	add_image_size('servie_catalog', 295, 131, true);
	add_image_size('seo_block_img', 570, 506, true);
	add_image_size('review_photo', 109, 109, true);
	add_image_size('service_img', 531, 400, true);
	add_image_size('tech_img_1', 570, 570, true);
	add_image_size('tech_img_2', 475, 305, true);
}

add_action('init', 'add_image_sizes');


register_sidebar(array(
	'name' => 'Сайдбар',
	'id' => "sidebar",
	'description' => 'Обычная колонка в сайдбаре',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="widgettitle">',
	'after_title' => "</span>\n",
));

if (!class_exists('clean_comments_constructor')) {
	class clean_comments_constructor extends Walker_Comment
	{
		public function start_lvl(&$output, $depth = 0, $args = array())
		{
			$output .= '<ul class="children">' . "\n";
		}
		
		public function end_lvl(&$output, $depth = 0, $args = array())
		{
			$output .= "</ul><!-- .children -->\n";
		}
		
		protected function comment($comment, $depth, $args)
		{
			$classes = implode(' ', get_comment_class()) . ($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '');
			echo '<li id="comment-' . get_comment_ID() . '" class="' . $classes . ' media">' . "\n";
			echo '<div class="media-left">' . get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object')) . "</div>\n";
			echo '<div class="media-body">';
			echo '<span class="meta media-heading">Автор: ' . get_comment_author() . "\n";
			//echo ' '.get_comment_author_email();
			echo ' ' . get_comment_author_url();
			echo ' Добавлено ' . get_comment_date('F j, Y в H:i') . "\n";
			if ('0' == $comment->comment_approved) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>' . "\n";
			echo "</span>";
			comment_text() . "\n";
			$reply_link_args = array(
				'depth' => $depth,
				'reply_text' => 'Ответить',
				'login_text' => 'Вы должны быть залогинены'
			);
			echo get_comment_reply_link(array_merge($args, $reply_link_args));
			echo '</div>' . "\n";
		}
		
		public function end_el(&$output, $comment, $depth = 0, $args = array())
		{
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) {
	function pagination()
	{
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text' => 'Назад',
			'next_text' => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all' => false,
			'end_size' => 15,
			'mid_size' => 15,
			'add_args' => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
		if (is_array($links)) {
			echo '<ul class="pagination">';
			foreach ($links as $link) {
				if (strpos($link, 'current') !== false) echo "<li class='active'>$link</li>";
				else echo "<li>$link</li>";
			}
			echo '</ul>';
		}
	}
}

if (function_exists('acf_add_options_page')) {
	
	acf_add_options_page(array(
		'page_title' => 'Основные настройки',
		'menu_title' => 'Основные настройки',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Настройки Header',
	// 	'menu_title'	=> 'Шапка',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts()
	{
		if (is_admin()) return false;
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js','','',true);
		
		//wp_enqueue_script('vendor', get_template_directory_uri().'/assets/js/vendor.js','',time(),true);
		//wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js','',time(),true);
		wp_enqueue_script('libs', get_template_directory_uri() . '/assets/build/js/libs.js', '', time(), true);
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/build/js/app.js', '', time(), true);
	}
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles()
	{
		if (is_admin()) return false;
		
		wp_dequeue_style('wp-block-library');
		//wp_enqueue_style( 'styles', get_template_directory_uri().'/assets/css/styles.css','',time() );
		wp_enqueue_style('styles', get_template_directory_uri() . '/assets/build/css/app.css', '', time());
		
	}
}

require_once get_template_directory() . '/bootstrap-navwalker.php';

function prefix_modify_nav_menu_args($args)
{
	return array_merge($args, array(
		'walker' => new WP_Bootstrap_Navwalker(),
	));
}

//add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');


remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


function phoneTEL($phone)
{
	return str_replace(array('(', ')', ' '), '', $phone);
}

function phoneNUM($phone)
{
	return preg_replace('/\(.+?\)/', '<span>$0</span>', $phone);
}

function dimox_breadcrumbs()
{
	
	/* === ОПЦИИ === */
	$text['home'] = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author'] = 'Статьи автора %s'; // текст для страницы автора
	$text['404'] = 'Ошибка 404'; // текст для страницы 404
	$text['page'] = 'Страница %s'; // текст 'Страница N'
	$text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
	
	$wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep = '<span class="breadcrumbs__separator"> › </span>'; // разделитель между "крошками"
	$before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after = '</span>'; // тег после текущей "крошки"
	
	$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */
	
	global $post;
	$home_url = home_url('/');
	$link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link .= '<meta itemprop="position" content="%3$s" />';
	$link .= '</span>';
	$parent_id = ($post) ? $post->post_parent : '';
	$home_link = sprintf($link, $home_url, $text['home'], 1);
	
	if (is_home() || is_front_page()) {
		
		if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
		
	} else {
		
		$position = 0;
		
		echo $wrap_before;
		
		if ($show_home_link) {
			$position += 1;
			echo $home_link;
		}
		
		if (is_category()) {
			$parents = get_ancestors(get_query_var('cat'), 'category');
			foreach (array_reverse($parents) as $cat) {
				$position += 1;
				if ($position > 1) echo $sep;
				echo sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
			}
			if (get_query_var('paged')) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
				echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) {
					if ($position >= 1) echo $sep;
					echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
				} elseif ($show_last_sep) echo $sep;
			}
			
		} elseif (is_search()) {
			if (get_query_var('paged')) {
				$position += 1;
				if ($show_home_link) echo $sep;
				echo sprintf($link, $home_url . '?s=' . get_search_query(), sprintf($text['search'], get_search_query()), $position);
				echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) {
					if ($position >= 1) echo $sep;
					echo $before . sprintf($text['search'], get_search_query()) . $after;
				} elseif ($show_last_sep) echo $sep;
			}
			
		} elseif (is_year()) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . get_the_time('Y') . $after;
			elseif ($show_home_link && $show_last_sep) echo $sep;
			
		} elseif (is_month()) {
			if ($show_home_link) echo $sep;
			$position += 1;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'), $position);
			if ($show_current) echo $sep . $before . get_the_time('F') . $after;
			elseif ($show_last_sep) echo $sep;
			
		} elseif (is_day()) {
			if ($show_home_link) echo $sep;
			$position += 1;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'), $position) . $sep;
			$position += 1;
			echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'), $position);
			if ($show_current) echo $sep . $before . get_the_time('d') . $after;
			elseif ($show_last_sep) echo $sep;
			
		} elseif (is_single() && !is_attachment()) {
			if (get_post_type() != 'post') {
				$position += 1;
				$post_type = get_post_type_object(get_post_type());
				if ($position > 1) echo $sep;
				echo sprintf($link, get_post_type_archive_link($post_type->name), $post_type->labels->name, $position);
				if ($show_current) echo $sep . $before . get_the_title() . $after;
				elseif ($show_last_sep) echo $sep;
			} else {
				$cat = get_the_category();
				$catID = $cat[0]->cat_ID;
				$parents = get_ancestors($catID, 'category');
				$parents = array_reverse($parents);
				$parents[] = $catID;
				foreach ($parents as $cat) {
					$position += 1;
					if ($position > 1) echo $sep;
					echo sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
				}
				if (get_query_var('cpage')) {
					$position += 1;
					echo $sep . sprintf($link, get_permalink(), get_the_title(), $position);
					echo $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
				} else {
					if ($show_current) echo $sep . $before . get_the_title() . $after;
					elseif ($show_last_sep) echo $sep;
				}
			}
			
		} elseif (is_post_type_archive()) {
			$post_type = get_post_type_object(get_post_type());
			if (get_query_var('paged')) {
				$position += 1;
				if ($position > 1) echo $sep;
				echo sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label, $position);
				echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . $post_type->label . $after;
				elseif ($show_home_link && $show_last_sep) echo $sep;
			}
			
		} elseif (is_attachment()) {
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID);
			$catID = $cat[0]->cat_ID;
			$parents = get_ancestors($catID, 'category');
			$parents = array_reverse($parents);
			$parents[] = $catID;
			foreach ($parents as $cat) {
				$position += 1;
				if ($position > 1) echo $sep;
				echo sprintf($link, get_category_link($cat), get_cat_name($cat), $position);
			}
			$position += 1;
			echo $sep . sprintf($link, get_permalink($parent), $parent->post_title, $position);
			if ($show_current) echo $sep . $before . get_the_title() . $after;
			elseif ($show_last_sep) echo $sep;
			
		} elseif (is_page() && !$parent_id) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . get_the_title() . $after;
			elseif ($show_home_link && $show_last_sep) echo $sep;
			
		} elseif (is_page() && $parent_id) {
			$parents = get_post_ancestors(get_the_ID());
			foreach (array_reverse($parents) as $pageID) {
				$position += 1;
				if ($position > 1) echo $sep;
				echo sprintf($link, get_page_link($pageID), get_the_title($pageID), $position);
			}
			if ($show_current) echo $sep . $before . get_the_title() . $after;
			elseif ($show_last_sep) echo $sep;
			
		} elseif (is_tag()) {
			if (get_query_var('paged')) {
				$position += 1;
				$tagID = get_query_var('tag_id');
				echo $sep . sprintf($link, get_tag_link($tagID), single_tag_title('', false), $position);
				echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
				elseif ($show_home_link && $show_last_sep) echo $sep;
			}
			
		} elseif (is_author()) {
			$author = get_userdata(get_query_var('author'));
			if (get_query_var('paged')) {
				$position += 1;
				echo $sep . sprintf($link, get_author_posts_url($author->ID), sprintf($text['author'], $author->display_name), $position);
				echo $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
				elseif ($show_home_link && $show_last_sep) echo $sep;
			}
			
		} elseif (is_404()) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . $text['404'] . $after;
			elseif ($show_last_sep) echo $sep;
			
		} elseif (has_post_format() && !is_singular()) {
			if ($show_home_link && $show_current) echo $sep;
			echo get_post_format_string(get_post_format());
		}
		
		echo $wrap_after;
		
	}
} // end of dimox_breadcrumbs()

require_once get_template_directory() . '/bem-walker.php';

function my_nav_menu( $args ) {
	
	$args = array_merge( [
		'menu_class' => 'header__list',
		'container' => false,
		'echo'            => false,
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 10,
		'walker'          => new My_Walker_Nav_Menu()
	], $args );
	
	echo wp_nav_menu( $args );
}

add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	
	return $content;
});

add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );

function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
	$my_attr = 'data-form';
	
	if ( isset( $atts[$my_attr] ) ) {
		$out[$my_attr] = $atts[$my_attr];
	}
	
	return $out;
}

?>
