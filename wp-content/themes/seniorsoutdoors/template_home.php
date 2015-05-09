<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();


    $date = tribe_get_month_view_date();
?>


<h1 class="page-title visually-hidden">Welcome to Seniors Outdoors!</h1>

<div class="page-content">

    <section class="calendar-month-view">
        <h2 class="calendar-month-title">Outing Schedule</h2> 
        <h3 class="month-year"><?php echo tribe_event_format_date( $date, $displayTime = false, $dateFormat = 'F Y' ); ?></h3>
        <?php tribe_show_month(); ?>
    </section>


    <section class="featured">
        <?php $found = false;

        $wp_query = new WP_Query('post_type=tribe_events'); 
        
        if ( $wp_query->have_posts() ): 
            while ( $wp_query->have_posts() ) : $wp_query->the_post();

    	    	if (has_term('featured-event','tribe_events_cat') AND !$found ) : 
                    $other_info = get_field('other_info');
                    $venue = tribe_get_venue();
    				$found = true;  ?>

    			    <h2 class="event-title purple-dark"><?php the_title() ?></h2>
    			    <p class="single-space"><?php echo $venue; ?></p>
                    <p><?php echo the_event_start_date(null,FALSE,'l, F j'); ?></p>

                    <?php 
                    if ($other_info) : ?>
                        <p><?php echo $other_info; ?></p>
                    <?php else: ?>
                        <p class="single-space">New Member Orientation: 5:30 pm</p>
                        <p class="single-space">Social: 6:30 pm</p>
                        <p class="single-space">Meeting: 7:00 pm</p>
                    <?php endif;
    		        $content = the_content(); ?>
                    <hr>
                <?php endif; 
            endwhile;
        endif; ?>
    </section>

    <?php wp_reset_query();          /*       https://digwp.com/2011/09/3-ways-to-reset-the-wordpress-loop/     */
    ?>

    <section class="image-section">
        <h2 class="gallery-title"><?php the_field('outing_name') ?>:</h2>
        <?php $images = get_field('image_gallery'); 
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


</div>

<?php
	get_footer();

?>

