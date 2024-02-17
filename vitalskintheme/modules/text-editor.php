<?php 
if ( get_sub_field('heading_pad') ) {
	$padding = "heading-pad";
} else{
	$padding = "";
}
?>
<section class="section section--text-editor <?php echo $padding ?>">
	<div class="section-wrapper">
        <?php echo the_sub_field("text-editor"); ?> 
    </div>
</section>