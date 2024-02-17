<section class="section section--tiles border-top--green full-width">
	<div class="section-wrapper">
		<div class="header-wrapper align--center">
			<span class="preheading"><?php echo the_sub_field('tiles_preheading'); ?></span>
			<h1 class="heading"><?php echo the_sub_field('tiles_heading'); ?></h1>
		</div>

		<?php if( have_rows('tiles') ): ?>
	    <div class="tiles">
	    <?php while( have_rows('tiles') ): the_row(); ?>
	        <div class="tile">
	            <div class="image-wrapper">
					<img src="<?php echo the_sub_field('tile_icon'); ?>"  alt="icon" width="120" height="120" />
				</div>
	            <h3><?php echo the_sub_field('tile_title'); ?></h3>
	            <p><?php echo the_sub_field('tile_blurb'); ?></p>
	        </div>
	    <?php endwhile; ?>
	    </div>
	<?php endif; ?>
	</div>
</section>
