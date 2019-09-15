<?php 
///Custom Fields
 $home_background_phone	    = get_field('home_background_phone');
 $home_background_tablet 	= get_field('home_background_tablet');
 $home_header	            = get_field('home_header');
 $home_paragraph      	        = get_field('home_paragraph');
 ?>


<div id="home">
        <div class="background phone"><img src="<?php echo $home_background_phone['url']; ?>" alt="<?php echo $home_background_phone['alt']; ?>"></div>
        <div class="background tablet"><img src="<?php echo $home_background_tablet['url']; ?>" alt="<?php echo $home_background_tablet['alt']; ?>"></div>
        <section class="main">
            <h3><?php echo $home_header;?></h3>
            <p><?php echo $home_paragraph;?></p>
        </section> <!--main-->
</div> <!--home-->
