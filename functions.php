
<?php

function mymiata_script_setup() {
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . 'assets/css/style.css', array(), false, 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . 'assets/js/js.js', array(), 'false', true );
}

add_action('wp_enqueue_scripts','mymiata_script_setup');


function _set_offset_on_front_page(&$query) {  //Sets post offset for front page
	if (is_front_page() && is_paged()) {
		$posts_per_page = isset($query->query_vars['posts_per_page']) ? $query->query_vars['posts_per_page'] : get_option('posts_per_page');
		$query->query_vars['offset'] = (($query->query_vars['paged'] - 2) * $posts_per_page) + 5;  // '+ x' x equals how big offset is.
	}
}

add_action('pre_get_posts', 'set_offset_on_front_page');

add_theme_support( 'post-thumbnails' );