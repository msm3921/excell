<?php
/*
 Template Name: Portfolio
 */
get_header(); ?>

<?php get_template_part('template-parts/content','hero');?>

<?php get_template_part('template-parts/content','offer');?>

<?php echo do_shortcode("[gkit id=11]"); ?>

<?php get_footer(); ?>
