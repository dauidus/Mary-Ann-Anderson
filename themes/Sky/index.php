<?php session_start();

?>
<?php get_header(); ?>


<?php if ( 'on' == get_option('sky_featured') ) get_template_part( 'includes/featured', 'index' ); ?>

	
<?php get_footer(); ?>