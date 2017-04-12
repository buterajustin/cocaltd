<?php
/**
 * Month View Single Day
 * This file contains one day in the month grid
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/single-day.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php
$day = tribe_events_get_current_month_day();
?>

<?php if ( $day['date'] != 'previous' && $day['date'] != 'next' ) : ?>

	<!-- Day Header -->
	<span class="day">
	

		<?php if ( $day['total_events'] > 0 && tribe_events_is_view_enabled( 'day' ) ) { ?>
			<a href="<?php echo tribe_get_day_link( $day['date'] ) ?>"><?php echo $day['daynum'] ?></a>
		<?php } else { ?>
			<?php echo $day['daynum'] ?>
		<?php } ?>

	</span>

	
	<ul class="events">
	<!-- Events List -->
	<?php while ($day['events']->have_posts()) : $day['events']->the_post() ?>
		<?php tribe_get_template_part('month/single', 'event') ?>
	<?php endwhile; ?>
	</ul>
	
	
	<!-- View More -->
	<?php if ( $day['view_more'] && tribe_events_is_view_enabled( 'day' ) ) : ?>
		<div class="tribe-events-viewmore">
			<?php
				if($day['total_events'] > 1 || $day['total_events'] == 0) {
					$events_label = __( 'Events ', 'tribe-events-calendar' );
				} else {
					$events_label = __( 'Event ', 'tribe-events-calendar' );
				}
			?>
			<a href="<?php echo $day['view_more'] ?>">View All <?php echo $day['total_events'] . " " . $events_label ?> &raquo;</a>
		</div>
	<?php endif ?>

<?php endif; ?>