<?php
/*
 Template Name: Contact Us
 */
get_header(); ?>

<?php 
///Advanced Custom Fields
$contact_info			= get_field('contact_info');
$triangle_image           = get_field('triangle_image');
 ?>

    <div id="contact">
        <div class="form">
            <p>Contact Us</p>
            <?php echo do_shortcode( '[contact-form-7 id="169" title="Contact form 1"]' ); ?>
        </div>
        <div class="contact-info">
            <p><?php echo $contact_info;?> </p>
            
        </div>
        <div class="triangle">
            <img src="<?php echo $triangle_image['url']; ?>" alt="<?php echo $triangle_image['alt']; ?>">
        </div>
    </div>
<?php get_footer(); ?>
