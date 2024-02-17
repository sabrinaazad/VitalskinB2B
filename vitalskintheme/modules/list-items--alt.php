<section class="section section--list-items--alt full-width" style="background-image: url(<?php echo the_sub_field('bg_image'); ?>) ">
    <div class="section-wrapper">
        
        <div class="content-wrapper">
        
        <?php $blurb = get_sub_field('blurb');
			if( $blurb ): ?>
			<div class="blurb">
				<h2 class="heading"><?php echo $blurb['heading']; ?></h2>
				<span class="subheading"><?php echo $blurb['subheading']; ?></span>
			</div>
		<?php endif; ?>

            <?php if( have_rows('list') ): ?>
            <div class="list">
            <?php while( have_rows('list') ): the_row(); ?>
                <div class="list-item">
                    <div class="image-wrapper">
                        <img src="<?php echo the_sub_field('list_icon'); ?>"  alt="icon" width="120" height="120" />
                    </div>
                    <div class="blurb-wrapper">
                        <h3 class="white"><?php echo the_sub_field('list_title'); ?></h3>
                        <p><?php echo the_sub_field('list_blurb'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
	        </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>