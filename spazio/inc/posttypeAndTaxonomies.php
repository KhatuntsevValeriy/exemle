<?php

add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'product', array(
  	'label'  => null,
    'labels' => array(
    	'name' 					=>	'Мебель',
        'singular_name' 		=>	'Product',
        'add_new' 				=>	'Добавить товар',
        'add_new_item' 			=> 	'Добавить новый товар',
        'edit_item' 			=> 	'Edit Product',
        'new_item' 				=>	'New Product',
        'view_item' 			=>	'View Product',
        'view_item'          	=> 'Смотреть товар',
        'search_items'       	=> 'Искать товар',
        'not_found'          	=> 'Не найдено', 
        'not_found_in_trash' 	=> 'Не найдено в корзине', 
        'parent_item_colon'  	=> '', 
      ),
      'public' 				=> true,
      'has_archive' 		=> true,
      'supports'            => array('title', 'editor', 'thumbnail', 'post-formats', 'page-attributes'),
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => null, 
      'taxonomies'          => array()
    )
  );
}

add_action('init', 'create_taxonomy');
function create_taxonomy(){
    register_taxonomy('furniture', array('product'), array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Продукция',
            'singular_name'     => 'Продукция',
            'search_items'      => 'Найти мебель',
            'all_items'         => 'Вся мебель',
            'view_item '        => 'Посмотреть мебель',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item'         => 'Редактировать',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить',
            'new_item_name'     => 'Новое название',
            'menu_name'         => 'Продукция',
        ),
        'description'           => '', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => true, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_in_menu'          => true, // равен аргументу show_ui
        'show_tagcloud'         => true, // равен аргументу show_ui
        'hierarchical'          => true,
        'update_count_callback' => '',
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false
    ) );
}