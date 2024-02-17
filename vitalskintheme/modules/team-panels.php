<?php 
if ( get_sub_field('padding_top') ) {
	$padding = "pad-top";
} else{
	$padding = "";
}
?>
<section class="section section--team-panels full-width <?php echo $padding ?>" style="background-image: url(<?php echo the_sub_field('bg_image'); ?>) ">
	<div class="section-wrapper">

		<?php if( have_rows('panels') ): ?>
        <div class="panels">
        <?php while( have_rows('panels') ): the_row(); ?>
            <div class="panel">
                <div class="image-wrapper">
                    <img src="<?php echo the_sub_field('panel_icon'); ?>"  alt="icon" width="375" height="375" />
                </div>
                <div class="blurb-wrapper">
					
					<?php if( get_sub_field('heading') ): ?><h3><?php echo the_sub_field('heading'); ?></h3><?php  endif; ?>
					<?php if( get_sub_field('title') ): ?><h4><?php echo the_sub_field('title'); ?></h4><?php  endif; ?>
					<?php if( get_sub_field('subheading') ): ?><p><?php echo the_sub_field('subheading'); ?></p><?php  endif; ?>
					
					<?php 
					$button_one = get_sub_field('button_one');
					if( $button_one['url'] ): ?>
						<a href="<?php echo $button_one['url']; ?>" class="btn btn-primary white"><?php echo $button_one['button']; ?></a>
					<?php  endif; ?>

					<?php 
					$button_two = get_sub_field('button_two');
					if( $button_two['url'] ): ?>
						<a href="<?php echo $button_two['url']; ?>" class="btn btn-primary"><?php echo $button_two['button']; ?></a>
					<?php  endif; ?>
				</div>
            </div>
        <?php endwhile; ?>
	    </div>
        <?php endif; ?>

	</div>
</section>
