<section class="section section--slider full-width">
	<div class="section-wrapper">
		<h2>
			<?php echo the_sub_field('heading'); ?>
		</h2>
		<p>
			<?php echo the_sub_field('subheading'); ?>
		</p>
        <div class="icon-slider">
                <?php if( have_rows('slider') ): ?>
                    
                        <?php while( have_rows('slider') ): the_row(); ?>
                        <div class="slide"><div class="image-wrapper"><img src="<?php echo the_sub_field('icon'); ?>" alt="icon" width="213" height="213" /></div>
                            <h3><?php echo the_sub_field('heading'); ?></h3></div>
                        <?php endwhile; ?>
                    
                <?php endif; ?>
        </div>
		<a href="<?php echo the_sub_field('url') ?>" class="btn btn-primary"><?php echo the_sub_field('label') ?></a>
	</div>
</section>


                