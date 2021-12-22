<?php

//adding the javascript and CSS files

function sh_setup(){
    wp_enqueue_style( 'google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=KoHo:wght@200;400;600&display=swap');
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action( 'wp_enqueue_scripts', 'sh_setup');


// Adding Theme Support

function gt_init(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5',
			array('comment-list','comment-form','search-form')
					 );
}

add_action('after_setup_theme', 'gt_init');

// Projects Post type

function sh_custom_post_type(){
	register_post_type('project',
					array(
						'rewrite' => array('slug' => 'artworks'),
						'labels' => array(
							'name' => 'Artworks',
							'singular_name' => 'Artwork',
							'add_new_item' => 'Add New Artwork',
							'edit_item' => 'Edit Artwork'
						),
						'menu-icon' => 'dashicons-clipboard',
						'public' => true,
						'has_archive' => true,
						'supports' => array(
							'title', 'thumbnail', 'editor', 'excerpt', 'comments'
						)
					  )
					);
}

add_action('init', 'sh_custom_post_type');



 /* Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main_sidebar',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Search Fliters

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');
