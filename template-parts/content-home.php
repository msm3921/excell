<?php 
///Custom Fields
 $home_background_phone	    = get_field('home_background_phone');
 $home_background_tablet 	= get_field('home_background_tablet');
 $home_title	            = get_field('home_title');
 $home_about      	        = get_field('home_about');
 ?>


<div id="home">
        <div class="background phone"><img src="<?php echo $home_background_phone['url']; ?>" alt="<?php echo $home_background_phone['alt']; ?>"></div>
        <div class="background tablet"><img src="<?php echo $home_background_tablet['url']; ?>" alt="<?php echo $home_background_tablet['alt']; ?>"></div>
        <section class="main">
            <h3>Reliability Accentuates Achievement</h3>
            <p>Excell Contractors is a general building contractor providing turn-key construction projects, development services, and management solutions to the D.C. Metro Area.</p>
        </section> <!--main-->
</div> <!--home-->
