<?php 
///Advanced Custom Fields
$hero_background			= get_field('hero_background');
$hero_text			        = get_field('hero_text');
$blurb_header               = get_field('blurb_header');
$blurb_paragraph            = get_field('blurb_paragraph');
 ?>

<div id="hero" data-type="background" data-speed="3">
            <?php if(!empty($hero_background)) : ?>

            <img src="<?php echo $hero_background['url']; ?>" alt="<?php echo $hero_background['alt']; ?>">

            <?php endif; ?>

            <h2 class="noselect"><?php echo $hero_text?></h2>

            <div class="blurb">
                <h3 class="blurb-header"><?php echo $blurb_header;?></h3>
                <p class="blurb-text"><?php echo $blurb_paragraph;?></p>
            </div> <!--blurb-->

</div> <!--hero-->