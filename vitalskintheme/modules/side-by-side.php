<section class="section section--side-by-side">
	<div class="section-wrapper">
		<div class="left">
			<div class="image-wrapper main-image">
				<img src="<?php echo the_sub_field('side_by_side_image_main'); ?>" alt="lifestyle image" width="435" height="435">
			</div>
			<div class="image-wrapper overlap-image">
				<img src="<?php echo the_sub_field('side_by_side_image_overlap'); ?>" alt="small image" width="147" height="147">
			</div>
		</div>
		<div class="right">
			<span class="preheading">
				<?php echo the_sub_field('side_by_side_preheading'); ?>
			</span>
			<h2>
				<?php echo the_sub_field('side_by_side_heading'); ?>
			</h2>
			<p>
				<?php echo the_sub_field('side_by_side_p'); ?>
			</p>
			<?php $links_group = get_sub_field('links_group');
			if( $links_group ): ?>
				<?php if( $links_group['url1'] ): ?>
					<a href="<?php echo $links_group['url1'] ?>" class="link arrow inline-on-desktop"><?php echo $links_group['label1'] ?></a><br>
				<?php endif; ?>
				<?php if( $links_group['url2'] ): ?>
					<a href="<?php echo $links_group['url2'] ?>" class="link arrow inline-on-desktop"><?php echo $links_group['label2'] ?></a><br>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
