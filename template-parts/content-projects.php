<div id="projects">
    <?php 
        $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_name', 'order' => 'ASC' ) );
    ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="project">
            <?php 
                    $title = get_field('project_title');
                    $shortcode = get_field('project_image');
                             
            if( !empty($shortcode) ): ?> 
                   <!-- <div class="project-image" data-toggle="modal" data-target="#myModal"> -->
                   <div class="project-content">
                        <h5><?php echo $title?></h5>
                        <p><?php echo $shortcode;?></p>
                   </div>
           <?php endif; ?> 
                </div> <!--projects-->
 <?php endwhile; wp_reset_query(); ?>