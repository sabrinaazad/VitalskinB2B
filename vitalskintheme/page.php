<?php

get_header();

// Check value exists.
if (have_rows('modules')) :

    // Loop through rows.
    while (have_rows('modules')) : the_row();
        // Case: text-editor layout.
        if (get_row_layout() == 'text-editor') :
            get_template_part('modules/text-editor');
        // Case: hero layout.
        elseif (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        // Case: tiles layout.
        elseif (get_row_layout() == 'tiles') :
            get_template_part('modules/tiles');
        // Case: info-block--alt layout.
        elseif (get_row_layout() == 'info-block--alt') :
            get_template_part('modules/info-block--alt');
        // Case: info-block layout.
        elseif (get_row_layout() == 'info-block') :
            get_template_part('modules/info-block');
        // Case: blog-tiles layout.
        elseif (get_row_layout() == 'blog-tiles') :
            get_template_part('modules/blog-tiles');
        // Case: hero-split--text-left layout.
        elseif (get_row_layout() == 'hero-split--text-left') :
            get_template_part('modules/hero-split--text-left');
        // Case: green-tiles layout.
        elseif (get_row_layout() == 'green-tiles') :
            get_template_part('modules/green-tiles');
        // Case: list-items layout.
        elseif (get_row_layout() == 'list-items') :
            get_template_part('modules/list-items');
        // Case: team-panels layout.
        elseif (get_row_layout() == 'team-panels') :
            get_template_part('modules/team-panels');
        // Case: pro-con layout.
        elseif (get_row_layout() == 'pro-con') :
            get_template_part('modules/pro-con');
        // Case: side-by-side layout.
        elseif (get_row_layout() == 'side-by-side') :
            get_template_part('modules/side-by-side');
        // Case: slider layout.
        elseif (get_row_layout() == 'slider') :
            get_template_part('modules/slider');
        // Case: image-with-cta layout.
        elseif (get_row_layout() == 'image-with-cta') :
            get_template_part('modules/image-with-cta');
        // Case: newsletter layout.
        elseif (get_row_layout() == 'newsletter') :
            get_template_part('modules/newsletter');
        // Case: hero-split--text-right layout.
        elseif (get_row_layout() == 'hero-split--text-right') :
            get_template_part('modules/hero-split--text-right');
        // Case: quote layout.
        elseif (get_row_layout() == 'quote') :
            get_template_part('modules/quote');
        // Case: pop-in layout.
        elseif (get_row_layout() == 'pop-in') :
            get_template_part('modules/pop-in');
        // Case: hero-split--text-bottom layout.
        elseif (get_row_layout() == 'hero-split--text-bottom') :
            get_template_part('modules/hero-split--text-bottom');
        // Case: side-by-side--alt layout.
        elseif (get_row_layout() == 'side-by-side--alt') :
            get_template_part('modules/side-by-side--alt');
        // Case: pop-in--alt layout.
        elseif (get_row_layout() == 'pop-in--alt') :
            get_template_part('modules/pop-in--alt');
        // Case: list-items--alt layout.
        elseif (get_row_layout() == 'list-items--alt') :
            get_template_part('modules/list-items--alt');
        // Case: icon-display layout.
        elseif (get_row_layout() == 'icon-display') :
            get_template_part('modules/icon-display');
        // Case: quote--alt layout.
        elseif (get_row_layout() == 'quote--alt') :
            get_template_part('modules/quote--alt');
        // Case: contact-form layout.
        elseif (get_row_layout() == 'contact-form') :
            get_template_part('modules/contact-form');
        // Case: partner-tabs layout.
        elseif (get_row_layout() == 'partner-tabs') :
            get_template_part('modules/partner-tabs');
        // Case: founders layout.
        elseif (get_row_layout() == 'founders') :
            get_template_part('modules/founders');
        // Case: hero-default layout.
        elseif (get_row_layout() == 'hero-default') :
            get_template_part('modules/hero-default');
        endif;
    // End loop.
    endwhile;

// No value.
else :
// Do something...
endif;

get_footer();
