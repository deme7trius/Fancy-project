<?php get_header(); ?>
<h1><?php echo get_the_title(); ?></h1>
<?php

	// Start the loop.
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;

get_footer(); ?>
