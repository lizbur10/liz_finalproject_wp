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
//$venue_details = array();

if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;
}

if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;
}

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

$category = get_field('category');

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

		<div>
			<img src="<?php the_field('featured_image') ?>" > 
		</div>

	<?php if (!has_term('so-meeting','tribe_events_cat')): ?>

		<section id="register">
			<h2>Register:</h2>
			<form name="outing_registration" action="#" method="post">
				<p><label for="name">Name</label>: <input id="name" type="text" name="name" size="30" required></p>
				<p><label for="email">Email</label>: <input id="email" type="email" name="email" size="30" required></p>
				<p><label for="number_of_people">Number of people</label>: <input id="number_of_people" type="number" name="number_of_people" min="1" max="4" value="1" required></p>
				<button type="submit">RSVP Now</button>
			</form>
		</section>
	<?php endif; ?>

		<!-- Schedule & Recurrence Details -->
		<div class="updated published time-details">
			<?php echo tribe_events_event_schedule_details() ?>
		</div>

		<!-- Event content -->
		<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
		<div class="tribe-events-single-event-description tribe-events-content entry-content description">
			<?php the_content(); ?>
		</div>
		<!-- .tribe-events-single-event-description -->
<?php endwhile; ?>



<!-- Event Meta -->
<div>
	<?php if (has_term('so-meeting','tribe_events_cat')): ?>
	<dl>
		<dt>Meet at: </dt><dd><?php echo $venue_name ?></dd>
	</dl> 
	<?php else: ?>
	<dl>
		<dt>Meet at: </dt><dd><?php echo $venue_name ?></dd>
		<?php if($difficulty): ?>
			<dt>Difficulty: </dt><dd><?php echo $difficulty ?></p>
		<?php endif; ?>
		<dt>Total distance: </dt><dd><?php echo $total_distance ?> miles</dd>
		<dt>Elevation gain: </dt><dd><?php echo $elevation_gain ?> feet</dd>
		<dt>Organizer: </dt><dd><?php echo $organizer ?></dd>
		<?php if($carpool): ?>
			<dt>Carpool: </dt><dd><?php echo $carpool ?></dd>
		<?php endif; ?>
		<?php if($dogs): ?>
			<dt>Dogs: </dt>
				<dd><?php foreach($dogs as $dog) {
					echo $dog ; }
			endif; ?></dd>
		<?php if($limit): ?>
			<dt>Limit: </dt><dd><?php echo $limit ?> people</dd>
		<?php endif; ?>
		<?php if($other_info): ?>
			<dt>Other info: </dt><dd><?php echo $other_info ?></dd>
		<?php endif; ?>
	</dl> 
<?php endif; ?>

</div><!-- .tribe-events-event-meta -->
<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ) ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-footer -->

