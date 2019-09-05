<?php 
///Advanced Custom Fields
$employee_title		                = get_field('employee_title');?>

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
                    $description = get_field('employee_description');
                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            
                    <div class=employee-content>
                        <h5><?php echo $name?></h5>
                        <h6><?php echo $title?></h6>
                        <p><?php echo truncate_string($description,150, ' ...'); ?></p>
                    </div>

                    <button><p>More on <?php echo truncate_string($name,1, ' >>'); ?></p></button>
            <?php endif; ?> 
            </div>
    <?php endwhile; wp_reset_query(); ?>
</div> <!--employees-->


<?php 
$image = get_field('image');
if( !empty($image) ): ?>
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>