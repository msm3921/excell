<div id="employee-page">
    <div id="bio-button">
            <button><a href="<?php echo site_url('biographies'); ?>">Biographies</a></button>
            
    </div>

    <div id="employees">
        <?php 
            $loop = new WP_Query( array( 'post_type' => 'employee', 'orderby' => 'post_id', 'order' => 'ASC' ) );
        ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="employee">
                <?php 
                
                        $image = get_field('employee_image');
                        $name  = get_field('employee_name');
                        $title = get_field('employee_title');
                if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <div class="employee-content">
                            <h5><?php echo $name?></h5>
                            <h6><?php echo $title?></h6>
                        </div><!--employee-content-->    
                <?php endif; ?> 
            </div><!--employee-->
        <?php endwhile; wp_reset_query(); ?>
    </div> <!--employees-->
</div> <!--employee-page-->
