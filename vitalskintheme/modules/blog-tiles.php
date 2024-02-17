<section class="section section--blog-tiles spacer full-width">
	<div class="section-wrapper">
		<div class="header-wrapper align--center">
			<span class="preheading">Updates</span>
			<h2>News & Information</h2>
		</div>
		<div class="mobile-slider">
			<ul class="blog-wrapper align--center">
 
				<?php $the_query = new WP_Query( 'posts_per_page=3' );  $slide_id = 1; ?>
				  
				<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
				  	 
				<li class="blog-item" id="<?php echo "slide" . $slide_id; ?>">
					
					<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
					
					<div class="blog--image" style="background-image: url( <?php echo $url ?> );"></div>
					
					<h3 class="title"><?php the_title(); ?></h3>
				
					<p><?php the_excerpt(__('(more…)')); ?></p>	
				  
				 	<a href="<?php the_permalink() ?>" class="btn btn-primary">Read More</a>
				</li>
				
				<?php $slide_id++; endwhile; wp_reset_postdata(); ?>

			</ul>
		</div>
		<div class="slider-nav">
			<span id="nav1"></span>
			<span id="nav2"></span>
			<span id="nav3"></span>
		</div>
	</div>
</section>
