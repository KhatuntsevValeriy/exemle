<?php

include("inc/options_theme.php");

include("inc/posttypeAndTaxonomies.php");


// * Enqueue scripts and styles.
function my_them_scripts() {
    wp_enqueue_style( 'my_them-style', get_stylesheet_uri() );
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style('owld', get_template_directory_uri().'/css/owl.theme.default.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.css');
    wp_enqueue_style('georgia', get_template_directory_uri().'/fonts/9605.ttf');
    wp_enqueue_style('latin', get_template_directory_uri().'/fonts/Nexus_Font.ttf');
    wp_enqueue_style('magnyfikccs', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');

    wp_enqueue_script('aja', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);  
    wp_enqueue_script('mgfjs', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), null, true);  
    wp_enqueue_script('owljs', get_template_directory_uri().'/js/owl.carousel.js', array('jquery'), null, true);
    wp_enqueue_script('animjs', get_template_directory_uri().'/js/animate-css.js', array('jquery'), null, true);

}
add_action( 'wp_enqueue_scripts', 'my_them_scripts' );

/*----регистрация меню ---------*/
register_nav_menu('header-menu', 'top-menu');

/*-----------добавляем поддержку миниатюр---------------------*/
add_theme_support('post-thumbnails');

add_theme_support('category-thumbnails');

/* ==============================================================================================
=================================== постраничная навигация ======================================
================================================================================================*/

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
/* ==============================================================================================
================================= постраничная навигация End ====================================
================================================================================================*/