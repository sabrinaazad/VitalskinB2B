<section class="section section--pop-in">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <img src="<?php echo the_sub_field('image'); ?>" alt="pop out image" width="260" height="260" />
            </div>
            <div class="blurb-wrapper">
                <?php if (get_sub_field('preheading')) : ?><span class="preheading"><?php echo the_sub_field("preheading"); ?></span><?php endif; ?>
                <?php if (get_sub_field('heading')) : ?><h2 class="heading white"><?php echo the_sub_field("heading"); ?> </h2><?php endif; ?>
                <?php if (get_sub_field('subheading')) : ?><p class="subheading white"><?php echo the_sub_field("subheading"); ?></p><?php endif; ?>
                <?php if (get_sub_field('url')) : ?><a href="<?php echo the_sub_field("url"); ?>" class="btn btn-primary green"><?php echo the_sub_field("label"); ?></a><?php endif; ?>
            </div>
        </div>
    </div>
</section>