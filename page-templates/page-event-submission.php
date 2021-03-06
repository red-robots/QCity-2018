<?php
/**
 * Template Name: Event Submission
 */
acf_form_head();
// sanitize inputs
add_filter('acf/update_value', 'wp_kses_post', 10, 1);

get_header(); 

$banner_image = get_field("banner_photo");
$video = get_field("video");
$description = get_field("description");
$tier_1_desc = get_field("tier_1_desc");
$tier_2_desc = get_field("tier_2_desc");
$tier_3_desc = get_field("tier_3_desc");
$tier_1_mail = get_field("tier_1_mail");
$tier_2_mail = get_field("tier_2_mail");
$tier_3_mail = get_field("tier_3_mail");
$tier_1_btn = get_field("tier_1_btn");
$tier_2_btn = get_field("tier_2_btn");
$tier_3_btn = get_field("tier_3_btn");
$tier_3_btn_link = get_field("tier_3_btn_link");
$mail = get_field("mailing_address");
?>

	<div id="primary" class="">
		
		<?php if( $banner_image ) { ?>
			<div class="membership-banner">
				<img src="<?php echo $banner_image['url']; ?>">
				<?php if($banner_copy):?>
					<div class="row-1">
						<?php echo $banner_copy;?>
					</div><!--.row-1-->
				<?php endif;?>
			</div><!--.jobs-banner-->
		<?php } ?>
		
		<div id="content" role="main" class="wrapper">

			<?php while ( have_posts() ) : the_post();?>
				<div class="site-content-full">
					<header class="archive-header">
						<div class="border-title">
							<h1><?php the_title(); ?></h1>
						</div><!-- border title -->
					</header><!-- .archive-header -->
					
					<section class="eventsub-intro">
						<?php if( $video ) { ?>
							<div class="video">
								<div class="embed-container">
									<?php the_field('video'); ?>
								</div>
							</div>		
						<?php } ?>
						<div class="entry-content">
							<?php echo $description; ?>
						</div><!-- entry-content -->
					</section>
					
					<section class="tiers membership-thirds">
						<div class="third entry-content">
							<?php echo $tier_1_desc; ?>
							<div class="button event-1">
								<a class=" " href="">
									<?php echo $tier_1_btn; ?>
								</a>
							</div>	
							
						</div>
						<div class="third entry-content">
							<?php echo $tier_2_desc; ?>
							<div class="button event-2">
								<a class="" href="">
									<?php echo $tier_2_btn; ?>
								</a>
							</div>	
							
						</div>
						<div class="third entry-content">
							<?php echo $tier_3_desc; ?>
							<div class="button event-3">
								<a class="" href="<?php echo $tier_3_btn_link; ?>">
									<?php echo $tier_3_btn; ?>
								</a>
							</div>	
							
						</div>
					</section>
					<section class="mailing-address entry-content" >
							
							<?php echo $mail; ?>
						
					</section>

				</div><!--.site-content-->
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>