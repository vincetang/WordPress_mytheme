<?php 
get_header();
	
if (have_posts()) :
?>

	<h2><?php 
		if ( is_category() ) {
			echo 'Posts categorized in: ' . single_cat_title();
		} elseif ( is_tag() ) {
			single_tag_title();
		} elseif ( is_author() ) {
			the_post();
			echo 'Posts written by: ' . get_the_author();
			rewind_posts();
		} elseif ( is_day() ) {
			echo 'Posts written on ' . get_the_date();
		} elseif ( is_month() ) {
			echo 'Posts written in ' . get_the_date('F Y');
		} elseif ( is_year() ) {
			echo 'Posts written in ' . get_the_date('Y');
		} else {
			echo 'Archives';
		}
		
	?></h2>
<?php

	while (have_posts()) : the_post();?>
		<article class="post">
			<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>	
			
			<p class="post-info"><?php the_time('F jS Y'); ?> 
			| by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID'))?>"><?php the_author(); ?></a>
			| Posted in 
			<?php
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			
			if ($categories) {
				foreach ($categories as $category) {
					$output .= '<a href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator; 
				}
				
				echo trim($output, $separator);
			}
			?>
			</a>
			</p>
			
			<?php the_excerpt(); ?>
		</article>
	<?php endwhile;
	
else :
	echo '<p>No content found</p>';
endif;
	
get_footer(); 

?>