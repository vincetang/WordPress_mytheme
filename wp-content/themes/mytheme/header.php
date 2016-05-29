<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset ' ); ?>">
		<meta name="viewport" content="width-device-width">
		<!-- [if lt IE 9] -->
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		
	</head>


<body <?php body_class(); ?>>

	<div class="container">
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>">My Site</a></h1>
			<h5><?php bloginfo('description'); ?></h5>
		</header>
		
