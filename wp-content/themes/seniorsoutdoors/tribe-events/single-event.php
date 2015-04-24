<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} 

$event_id = get_the_ID();

?>

<?php

// Setup an array of venue details for use later in the template
$venue_details = array();

if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;
}

if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;
}
// Venue microformats
$has_venue_address = ( $venue_address ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

// Difficulty
$difficulty = get_field('difficulty');

// Total distance
$total_distance = get_field('total_distance');

//Elevation gain
$elevation_gain = get_field('elevation_gain');


//Carpool
$carpool = get_field('carpool');


//Dogs
$dogs = get_field('dogs');


//Limit
$limit = get_field('limit');


//Other info
$other_info = get_field('other_info');


?>


<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?>
	<div class="tribe-events-event-cost">
		<span><?php echo tribe_get_cost( null, true ); ?></span>
	</div>
<?php endif; ?>

<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<h2 class="tribe-events-list-event-title entry-title summary">
	<a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
		<?php the_title() ?>
	</a>
</h2>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>


<!-- Event Content -->
<?php while ( have_posts() ) :  the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Event featured image, but exclude link -->
		<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>

		<!-- Event content -->
		<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
		<div class="tribe-events-single-event-description tribe-events-content entry-content description">
			<?php the_content(); ?>
		</div>
		<!-- .tribe-events-single-event-description -->
<?php endwhile; ?>



<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="tribe-events-event-meta vcard">
	<div class="author <?php echo $has_venue_address; ?>">

		<!-- Schedule & Recurrence Details -->
		<div class="updated published time-details">
			<?php echo tribe_events_event_schedule_details() ?>
		</div>

		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<div class="tribe-events-venue-details">
				<?php echo implode( ', ', $venue_details ); ?>
			</div> <!-- .tribe-events-venue-details -->
		<?php endif; ?>

		<div>
			<p><?php echo $organizer ?></p>
			<p><?php echo $difficulty ?></p>
			<p><?php echo $total_distance ?> miles</p>
			<p><?php echo $elevation_gain ?> feet</p>
			<p><?php echo $carpool ?></p>
			<p><?php echo $dogs ?></p>
			<p><?php echo $limit ?> people</p>
			<p><?php echo $other_info ?></p>

		</div> 

	</div>
</div><!-- .tribe-events-event-meta -->
<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ) ?>


