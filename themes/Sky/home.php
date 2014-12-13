<?php session_start();
/*
Template Name: home Page
*/
?>
<?php get_header(); ?>

<?php if ( 'on' == get_option('sky_featured') ) get_template_part( 'includes/featured', 'index' ); ?>

<?php get_footer(); ?>