<div id="bio">
    <?php 
        $loop = new WP_Query( array( 'post_type' => 'employee', 'orderby' => 'post_id', 'order' => 'ASC' ) );
    ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="employee-bio">
                <?php 
                
                        $image = get_field('employee_image');
                        $name  = get_field('employee_name');
                        $title = get_field('employee_title');
                        $description = get_field('employee_description');
                    if( !empty($description) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="content-bio">
                            <h5><?php echo $name?></h5>
                            <h6><?php echo $title?></h6>
                            <p><?php echo $description;?></p>

                    </div><!--content-bio-->
                <?php endif; ?> 
            </div><!--employee-bio-->
    <?php endwhile; wp_reset_query(); ?>
</div> <!--bio-->