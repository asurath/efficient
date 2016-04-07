<?php
/*
* Template Name: Blog Post Template
*/
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
		<h2 style="padding-bottom:30px;" ><?php the_title(); ?></h2>
		<?php the_content(); ?>
<?php
endwhile;
endif;
get_footer();
