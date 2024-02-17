<section class="section section--pro-con full-width">
	<div class="section-wrapper">
    
        <div class="button-wrapper">
            <?php 
                $button_one = get_sub_field('button_one');
                if( $button_one['url'] ): ?>
                    <a href="<?php echo $button_one['url']; ?>" class="btn btn-primary green mobile-only"><?php echo $button_one['button']; ?></a>
            <?php  endif; ?>
            <?php 
                $button_two = get_sub_field('button_two');
                if( $button_two['url'] ): ?>
                    <a href="<?php echo $button_two['url']; ?>" class="btn btn-primary green mobile-only"><?php echo $button_two['button']; ?></a>
            <?php endif; ?>
        </div>
        <div class="two-col">
            <div class="image-wrapper">
                <img src="<?php echo the_sub_field('image'); ?>"  alt="image" width="375" height="375" />
            </div>
            <div class="text-wrapper">
                <h3 class="white"><?php echo the_sub_field('heading'); ?></h3>
                <?php if (get_sub_field('subheading') ) : ?><p class="white"><?php echo the_sub_field('subheading'); ?></p><?php endif; ?>
                <?php 
                $button_three = get_sub_field('button_three');
                if( $button_three['url'] ): ?>
                    <a href="<?php echo $button_three['url']; ?>" class="btn btn-primary green"><?php echo $button_three['button']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="side-by-side desktop-only">
            <div class="left">
                <div class="image-wrapper">
                    <img src="/wp-content/themes/vitalskintheme/assets/positive-heading.png" alt="VitalSkin Dermatology" width="617" height="224" />
                </div>
                <div class="content-wrapper">
                    <?php if( have_rows('list-item-1') ): ?>
                        <div class="list">
                        <?php while( have_rows('list-item-1') ): the_row(); ?>
                            <div class="list-item">
                                <h4 class="white"><?php echo the_sub_field('heading'); ?></h4>
                                <?php if( get_sub_field('subheading') ): ?><p class="white"><?php echo the_sub_field('subheading'); ?></p><?php  endif; ?>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <div class="image-wrapper">
                    <img src="/wp-content/themes/vitalskintheme/assets/the-rest-heading.png" alt="Traditional Private Equity" width="617" height="224" />
                </div>
                <div class="content-wrapper">
                    <?php if( have_rows('list-item-2') ): ?>
                        <div class="list">
                        <?php while( have_rows('list-item-2') ): the_row(); ?>
                            <div class="list-item">
                            <h4 class="white"><?php echo the_sub_field('heading'); ?></h4>
                            <?php if( get_sub_field('subheading') ): ?><p class="white"><?php echo the_sub_field('subheading'); ?></p><?php  endif; ?>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

	</div>
</section>
