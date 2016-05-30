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

