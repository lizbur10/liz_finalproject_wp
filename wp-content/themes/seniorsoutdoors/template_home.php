<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();

?>


<h1 class="page-title">Welcome to Seniors Outdoors!</h1>

<section class="image-section">
	<?php $images = get_field('image_gallery'); ?>

<?php
    if( $images ): ?>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</section>


<?php tribe_show_month(); ?>



<section class="featured">
	<?php $found = false;

    $wp_query = new WP_Query('post_type=tribe_events'); 

    if ( $wp_query->have_posts() AND !$found ): 
        while ( $wp_query->have_posts() ) : $wp_query->the_post();

	    	if (has_term('featured-event','tribe_events_cat') ) : 
				$found = true; ?>

			    <p class="event-title"><?php the_title() ?></p>
			    <p><?php echo tribe_events_event_schedule_details() ?></p>
			    <p><?php tribe_get_meta( 'tribe_event_venue_name' ) ?></p>
			    <p>New Member Orientation: 5:30 pm</p>
				<p>Social: 6:30 pm</p>
				<p>Meeting: 7:00 pm</p>
		        <?php $content = the_content(); 
        	endif;
        endwhile;
    endif; ?>
</section>



<?php
	get_footer();

?>

