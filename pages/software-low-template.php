<?php
/*
* Template Name: Software Low Page
*/
function custom_excerpt_length() {
	return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

get_header();

$args = array(
	'post_type' => 'post',
	'tax_query' => array(
		array(
			'taxonomy' => 'software',
			'field'    => 'slug',
			'terms'    => 'low-level',
		),
	),
);
$the_query = new WP_Query($args); 
if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<a href="<?php the_permalink(); ?>" ><h2><?php the_title(); ?></h2></a>
		<p><?php echo substr(get_the_excerpt(), 0, -11); ?>... <a href="<?php the_permalink(); ?>" >read more</a></p>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<h2><?php _e( 'Sorry, no posts matched your criteria' ); ?></h2>
<?php endif; 
get_footer();

