<?php 
///Custom Fields
 $home_background	= get_field('home_background');
 $home_header	            = get_field('home_header');
 $home_paragraph      	    = get_field('home_paragraph');
 ?>


<div id="home">
    <div class="background">
        <img src="<?php echo $home_background['url']; ?>" alt="<?php echo $home_background['alt']; ?>">
    </div>
    <section class="main">
            <h3 class="hero-header"><?php echo $home_header;?></h3>
            <p class="hero-text"><?php echo $home_paragraph;?></p>
    </section> <!--main-->
</div> <!--home-->
