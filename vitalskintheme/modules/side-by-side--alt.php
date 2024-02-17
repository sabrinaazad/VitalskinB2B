<section class="section section--side-by-side--alt full-width" style="background-image: url(<?php echo the_sub_field('bg_image'); ?>)">
	<div class="section-wrapper">
		<div class="left">
			<div class="image-wrapper main-image">
				<img src="<?php echo the_sub_field('side_by_side_image_main'); ?>" alt="lifestyle image" width="395" height="395">
			</div>
			<div class="image-wrapper overlap-image">
				<img src="<?php echo the_sub_field('side_by_side_image_overlap'); ?>" alt="small image" width="147" height="147">
			</div>
		</div>
		<div class="right">
			<h2>
				<?php echo the_sub_field('side_by_side_heading'); ?>
			</h2>
			<p>
				<?php echo the_sub_field('side_by_side_p'); ?>
			</p>
			<?php $button = get_sub_field('button');
			if( $button ): ?>
				<?php if( $button['url'] ): ?>
					<a href="<?php echo $button['url'] ?>" class="btn btn-primary green"><?php echo $button['label'] ?></a><br>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
