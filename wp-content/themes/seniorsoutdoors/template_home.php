<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();

?>


<h1 class="page-title">Welcome to Seniors Outdoors!</h1>

<div class="page-content">

    <section class="image-section clearfix">
        <h2 class="gallery-title">Name of Recent Outing</h2>
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


    <section class="calendar-month-view">
        <?php tribe_show_month(); ?>
    </section>


    <section class="featured">
    	<?php $found = false;

        $wp_query = new WP_Query('post_type=tribe_events'); 
        
        if ( $wp_query->have_posts() AND !$found ): 
            while ( $wp_query->have_posts() ) : $wp_query->the_post();

    	    	if (has_term('featured-event','tribe_events_cat') ) : 
                    $other_info = get_field('other_info');
                    $venue = tribe_get_venue();
    				$found = true; ?>

    			    <h2 class="event-title purple-dark"><?php the_title() ?></h2>
    			    <p><?php echo $venue; ?></p>
                    <?php 
                    if ($other_info) : ?>
                        <p><?php echo $other_info; ?></p>
                    <?php else: ?>
                        <p class="single-space">New Member Orientation: 5:30 pm</p>
                        <p class="single-space">Social: 6:30 pm</p>
                        <p class="single-space">Meeting: 7:00 pm</p>
                    <?php endif;
    		        $content = the_content(); 
            	endif;
            endwhile;
        endif; ?>
    </section>

</div>

<?php
	get_footer();

?>

