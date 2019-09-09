<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer>
		<div class="<?php echo esc_attr( $container ); ?>">
				<div class="footer-img">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/../../uploads/2019/08/logo-min.png" alt="Excell Contractors Logo">
			
					<img src="<?php bloginfo('stylesheet_directory'); ?>/../../uploads/2019/08/swamblack-min.png" alt="Small, Women-owned, and Minority-owned Business">
				</div><!-- end col -->
					<div class="footer-nav">
					<nav>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container'       => 'nav',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'list-unstyled list-inline'
						)
					); ?>
					</nav>
		</div> <!-- container end -->
</footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


<?php 
        $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_name', 'order' => 'ASC' ) );
    ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php 
                    $shortcode = get_field('shortcode');              
             ?> 
					<!-- MODAL 2 -->
						<div class="modal fade" id="myModal">
							<?php get_template_part ('template-parts/content','modal'); ?>
						</div><!-- modal 2 -->
 		<?php endwhile; wp_reset_query(); ?>

</body>



