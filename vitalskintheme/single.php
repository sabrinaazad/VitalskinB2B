<?php get_header(); ?>
<main class="single-template">
    <section class="section section--single">
        <a href="/news/">« Back to All Blogs</a>
        <div class="single">

            <?php while (have_posts()) : the_post(); ?>

                <h1 class="page-title"><?php the_title(); ?></h1>

                <div class="content">
                    <div class="date"><?php echo get_the_date(); ?></div>
                    <h4 class="author"><?php echo get_the_author(); ?></h4>
                    <div class="category">Categories: <?php echo the_category(); ?></div>
                    <div class="blog-post">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
                </div>

                <nav id="nav-posts">
                    <div class="next"><?php next_post_link('%link', 'NEXT POST<br>&laquo; %title', false); ?></div>
                    <div class="prev"><?php previous_post_link('%link', 'PREVIOUS POST<br>%title &raquo;', false); ?></div>
                </nav>

            <?php endwhile; ?>

        </div>
    </section>
    <section class="section section--aside">

        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>

    </section>
</main>
<?php get_footer(); ?>