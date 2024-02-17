<section class="section section--hero full-width">
	<div class="hero-wrapper">
		<?php
			$blurb_one = get_sub_field('blurb_one');
			if( $blurb_one ): ?>
			<div class="hero-blurb--one">
				<h2 class="heading"><?php echo $blurb_one['heading']; ?></h2>
				<span class="subheading desktop-only"><?php echo $blurb_one['subheading']; ?></span>
				<a href="<?php echo $blurb_one['url']; ?>" class="btn btn-primary green"><?php echo $blurb_one['button']; ?></a>
			</div>
		<?php endif; ?>
		<?php
			$blurb_two = get_sub_field('blurb_two');
			if( $blurb_two ): ?>
			<div class="hero-blurb--two">
				<h2 class="heading"><?php echo $blurb_two['heading']; ?></h2>
				<span class="subheading desktop-only"><?php echo $blurb_two['subheading']; ?></span>
				<a href="<?php echo $blurb_two['url']; ?>" class="btn btn-primary"><?php echo $blurb_two['button']; ?></a>
			</div>
		<?php endif; ?>
	</div>
</section>
