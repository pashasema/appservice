<?php
//adding custom post-type Books
function template_custom_post_type (){
	$labels = array(
		'name' => 'Книги',
		'singular_name' => 'Книга',
		'add_new' => 'Добавить книгу',
		'all_items' => 'Все книги',
		'add_new_item' => 'Добавить новую книгу',
		'edit_item' => 'Редактировать книгу',
		'new_item' => 'Новая книга',
		'view_item' => 'Показать книгу',
		'search_item' => 'Поиск книги',
		'not_found' => 'Книга не найдена',
		'not_found_in_trash' => 'В корзине книга не найдена',
		'parent_item_colon' => 'Родительская книга'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 6,
		'exclude_from_search' => false
	);
	register_post_type('books',$args);
}

//adding taxonomy author
function appserv_cust_tax_author() {
	$labels = array(
		'name' => 'Авторы',
		'singular_name' => 'Автор',
		'search_items' => 'Поиск авторов',
		'all_items' => 'Все авторы',
		'parent_item' => 'Родительский автор',
		'parent_item_colon' => 'Родительский автор:',
		'edit_item' => 'Редактировать автора',
		'update_item' => 'Обновить автора',
		'add_new_item' => 'Добавить нового автора',
		'new_item_name' => 'Новый автор',
		'menu_name' => 'Автор'
	);
	$args = array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var' => true,
	);
	register_taxonomy('author', array('books'), $args);
}

//add new taxonomy genre
function appserv_cust_tax_genre() {
	$labels = array(
		'name' => 'Жанры',
		'singular_name' => 'Жанр',
		'search_items' => 'Поиск жанров',
		'all_items' => 'Все жанры',
		'parent_item' => 'Родительский жанр',
		'parent_item_colon' => 'Родительский жанр:',
		'edit_item' => 'Редактировать жанр',
		'update_item' => 'Обновить жанр',
		'add_new_item' => 'Добавить новый жанр',
		'new_item_name' => 'Новый жанр',
		'menu_name' => 'Жанр'
	);
	$args = array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var' => true,
	);
	register_taxonomy('genre', array('books'), $args);
}

add_action('init','template_custom_post_type');
add_action( 'init' , 'appserv_cust_tax_genre' );
add_action( 'init' , 'appserv_cust_tax_author' );