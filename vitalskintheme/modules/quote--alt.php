<section class="section section--quote--alt full-width">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <img src="<?php echo the_sub_field('image'); ?>" alt="quote image" width="260" height="260" />
            </div>
            <div class="blurb-wrapper">
                <?php if (get_sub_field('preheading')) : ?><span class="preheading"><?php echo the_sub_field("preheading"); ?></span><?php endif; ?>
                <?php if (get_sub_field('subheading')) : ?><p class="subheading"><?php echo the_sub_field("subheading"); ?></p><?php endif; ?>
            </div>
        </div>
    </div>
</section>