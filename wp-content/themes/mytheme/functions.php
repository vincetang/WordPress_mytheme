<?php

// Load scripts
function mytheme_scripts() {
	wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );


// Get top ancestor id
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

// Page's current children
function has_children() {
	global $post;
	
	$child_pages = get_pages('child_of=' . $post->ID);
	return count($child_pages);
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function myTheme_setup() {
	// Navigation menus
	register_nav_menus(array(
			'primary' => __('Primary Menu' ),
			'footer' => __( 'Footer Menu' )
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'myTheme_setup');