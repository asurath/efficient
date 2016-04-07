<?php
/*
* Template Name: Home Page
*/


function custom_excerpt_length() {
	return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

get_header();
$the_query = new WP_Query(array( 'post_type' => 'post')); 
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<a href="<?php the_permalink(); ?>" ><h2 style="padding-bottom:30px;" ><?php the_title(); ?></h2></a>
		<?php the_content(); ?>
		<hr>
<?php
endwhile;
endif;
get_footer();
