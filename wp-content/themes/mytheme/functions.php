<?php

// Load scripts
function mytheme_scripts() {
	wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

// Navigation menus
register_nav_menus(array(
		'primary' => __('Primary Menu' ),
		'footer' => __( 'Footer Menu' )
));

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