<div id="projects">
    <?php 
        $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_name', 'order' => 'ASC' ) );
    ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="project">
            <?php 
            
                    $title = get_field('project_title');
                    $code = get_field('project_shortcode');
                    if( !empty($code) ): ?>
                        <div class=project-content>
                            <h5><?php echo $title?></h5>
                            <div><?php echo do_shortcode($code);?></div>
                        </div>
                    <?php endif; ?> 
            </div>
        <?php endwhile; wp_reset_query(); ?>
</div> <!--projects-->
<div><?php echo do_shortcode("[gkit id=8]"); ?></div>
<?php 

