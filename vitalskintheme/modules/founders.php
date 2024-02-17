<section class="section section--founders">
	<div class="section-wrapper">

		<?php if( have_rows('panels') ): $i = 0; ?>
        <div class="founders">
        <?php while( have_rows('panels') ): the_row();  $i++;  ?>
            <div class="founder" data-class="bio<?php echo $i; ?>">
                <div class="image-wrapper">
                    <img src="<?php echo the_sub_field('panel_icon'); ?>"  alt="icon" width="375" height="375" />
                </div>
                <div class="blurb-wrapper">
                    <?php if( get_sub_field('heading') ): ?><h3><?php echo the_sub_field('heading'); ?></h3><?php  endif; ?>
					<?php if( get_sub_field('title') ): ?><h4><?php echo the_sub_field('title'); ?></h4><?php  endif; ?>
					<?php if( get_sub_field('subheading') ): ?><p><?php echo the_sub_field('subheading'); ?></p><?php  endif; ?>
				</div>
                <?php if( get_sub_field('bio') ): ?>
                    <div class="bio bio<?php echo $i; ?>">
                        <div class="bio-image-wrapper">
                            <img src="<?php echo the_sub_field('panel_icon'); ?>"  alt="icon" width="375" height="375" />
                        </div>
                        <div class="content-wrapper">
                            <h3><?php echo the_sub_field('heading'); ?></h3>
                            <h4><?php echo the_sub_field('title'); ?></h4>
                            <p><?php echo the_sub_field('bio'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
	    </div>
        <?php endif; ?>
       
        <div class="bios"></div>
        
	</div>
</section>
