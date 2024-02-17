<section class="section section--list-items full-width" style="background-image: url(<?php echo the_sub_field('bg_image'); ?>) ">
	<div class="section-wrapper">
		<div class="content-wrapper">
		<?php $blurb1 = get_sub_field('blurb1');
			if( $blurb1 ): ?>
			<div class="blurb">
				<h2 class="heading"><?php echo $blurb1['heading']; ?></h2>
				<span class="subheading"><?php echo $blurb1['subheading']; ?></span>
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

		<?php $blurb2 = get_sub_field('blurb2');
			if( $blurb2 ): ?>
			<div class="blurb">
				<span class="subheading"><?php echo $blurb2['subheading']; ?></span>
				<?php if( $blurb2['url'] ) : ?><a href="<?php echo $blurb2['url']; ?>" class="btn btn-primary"><?php echo $blurb2['label']; ?></a><?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
	</div>
</section>
