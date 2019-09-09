<div id="projects">
    <?php 
        $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_name', 'order' => 'ASC' ) );
    ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="project">
            <?php 
                    $title = get_field('project_title');
                    $images = acf_photo_gallery('images', $loop->URL);
                             
            if( !empty($title) ): ?> 
                   <div class="project-image" data-toggle="modal" data-target="#portfolio-modal-<?php the_ID(); ?>">
                        <?php echo the_post_thumbnail(); ;?>
                    </div>
                   <div class="project-content">
                        <h5><?php echo $title?></h5>

                    <div>

                        <?php if($images): ?> 

                        <div class="gallery"> 

                        <?php 

//$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

                        </div> 

                        <?php endif; ?>
                                                
                        
                    </div>

                            
                   
                   </div>
           <?php endif; ?> 
                </div> <!--projects-->
 <?php endwhile; wp_reset_query(); ?>