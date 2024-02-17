<section class="section section--pop-in--alt">
    <div class="section-wrapper">
        <div class="blurb-wrapper">
            <?php if (get_sub_field('heading')) : ?><h2 class="heading white"><?php echo the_sub_field("heading"); ?> </h2><?php endif; ?>
            <?php $button_group = get_sub_field('button_group');
            if ($button_group) : ?>
                <div class="button-wrapper">
                    <?php if ($button_group['url1']) : ?>
                        <a href="<?php echo $button_group['url1'] ?>" class="btn btn-primary white"><?php echo $button_group['label1'] ?></a><br>
                    <?php endif; ?>
                    <?php if ($button_group['url2']) : ?>
                        <a href="<?php echo $button_group['url2'] ?>" class="btn btn-primary"><?php echo $button_group['label2'] ?></a><br>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>