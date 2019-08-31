<?php 
///Advanced Custom Fields
$author_story			= get_field('hero_background');
$author_image			= get_field('hero_text');
 ?>

<div id="hero" data-type="background" data-speed="3">
            <?php if(!empty($hero_background)) : ?>

            <img src="<?php echo $hero_background['url']; ?>" alt="<?php echo $hero_background['alt']; ?>">

            <?php endif; ?>

            <h3><?php echo $hero_text?></h3>
</div> <!--hero-->