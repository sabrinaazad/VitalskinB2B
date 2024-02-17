<?php 

if( get_sub_field('overlap') ) 
	{
	$overlap = "overlap";
} else {
	$overlap = "";
}	

?>
<section class="section section--green-tiles full-width <?php echo $overlap ?>">
	<div class="section-wrapper">
        <?php if( get_sub_field('heading') ) : ?>	
            <h2 class="heading"><?php echo the_sub_field('heading'); ?></h2>
        <?php endif; ?>
        <?php if( get_sub_field('subheading') ) : ?>	
            <span class="subheading"><?php echo the_sub_field('subheading'); ?></span>
        <?php endif; ?>  

        <?php if( have_rows('tiles') ): ?>
        <div class="tiles">
        <?php while( have_rows('tiles') ): the_row(); ?>
            <div class="tile">
                <div class="image-wrapper">
                    <img src="<?php echo the_sub_field('tile_icon'); ?>"  alt="icon" width="120" height="120" />
                </div>
                <h3><?php echo the_sub_field('tile_title'); ?></h3>
                <p><?php echo the_sub_field('tile_blurb'); ?></p>
                <?php if( get_sub_field('tile_url') ) : ?><a class="btn btn-primary white" href="<?php echo the_sub_field('tile_url'); ?>"><?php echo the_sub_field('tile_button'); ?></a><?php endif; ?>  
            </div>
        <?php endwhile; ?>
	    </div>
        <?php endif; ?>

</section>
