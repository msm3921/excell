<?php 
///Advanced Custom Fields
$hero_background			= get_field('hero_background');
$hero_text			        = get_field('hero_text');
 ?>

<div id="hero" data-type="background" data-speed="3">
            <?php if(!empty($hero_background)) : ?>

            <img src="<?php echo $hero_background['url']; ?>" alt="<?php echo $hero_background['alt']; ?>">

            <?php endif; ?>

            <h2><?php echo $hero_text?></h2>
</div> <!--hero-->