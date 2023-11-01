<?php

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	$slug = get_post_field( 'post_name', get_post() );
	get_template_part( 'template-parts/content/content', $slug );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();