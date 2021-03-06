<?php 
if( is_category('6') ) {
	get_template_part('ads/right-rail-health'); 
} else {
	get_template_part('ads/right-rail');
} ?>

<header class="archive-header">
    <div class="border-title floatright">
        <h2>QcityEVENTS</h2>
    </div><!-- border title -->
</header><!-- .archive-header -->

<div class="clear"></div>

<div class="event-box">
<?php
 $thedate = date("Ymd"); 
$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'event',
	'posts_per_page' => 5,
	'meta_key' => 'event_date',
    'meta_value' => $thedate,
    'meta_compare' => '>=',
	'orderby' => 'meta_value_num',
	'order' => 'ASC'
));
if ($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();

$startDate = DateTime::createFromFormat('Ymd', get_field('event_date'));

?>	
	<div class="event-box-event">
    	<div class="event-box-date"><?php echo $startDate->format('n.j'); ?></div>
        <div class="event-box-title"><?php the_title(); ?></div>
        <div class="event-box-link">
        	<a href="<?php the_permalink(); ?>">See Event</a>
        </div><!-- evnent box link -->
    </div><!-- event box event -->
    
<?php endwhile; wp_reset_query(); wp_reset_postdata(); endif;  ?>
    
    <div class="event-box-button"><a href="<?php bloginfo('url'); ?>/events">More Events</a></div><!-- event box button -->
    <div class="event-box-button"><a href="<?php bloginfo('url'); ?>/events">Submit an Event</a></div><!-- event box button -->
    
</div><!-- event box -->