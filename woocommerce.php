<?php get_header(); ?>
<h1><?php echo get_the_title(); ?></h1>
<?php

	// Start the loop.
 woocommerce_content(); 

get_footer(); ?>
