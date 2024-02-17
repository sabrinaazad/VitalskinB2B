<section class="section section--icon-display full-width" style="background-image: url(<?php echo the_sub_field('bg_image'); ?>) ">
    <div class="section-wrapper">
        
        <div class="content-wrapper">
        
        <?php $blurb = get_sub_field('blurb');
			if( $blurb ): ?>
			<div class="blurb">
				<h2 class="heading"><?php echo $blurb['heading']; ?></h2>
				<h3 class="subheading"><?php echo $blurb['subheading']; ?></h3>
			</div>
		<?php endif; ?>

        <div class="icon-field">
        <?php if( have_rows('icon_field') ): ?>
                    
            <?php while( have_rows('icon_field') ): the_row(); ?>
                <div class ="icon-wrapper"><div class="image-wrapper"><img src="<?php echo the_sub_field('icon'); ?>" alt="icon" width="213" height="213" /></div>
                <h3><?php echo the_sub_field('heading'); ?></h3></div>
            <?php endwhile; ?>
          
         <?php endif; ?>
        </div>
            
        </div>
    </div>
</section>