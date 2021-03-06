<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="">
		<div id="content" role="main" class="wrapper">

		<div class="site-content-full">
			<div class="site-content job-board">
			<?php if ( have_posts() ) : ?>
				<header class="archive-header">
					<div class="border-title">
						<h1><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div><!-- border title -->
				</header><!-- .archive-header -->
				
					<?php /* Start the Loop */ ?>
					<section class="jobs">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="job">
								<?php $image = get_field('image');?>								
								<?php //if ( $image ): 
									if(has_post_thumbnail()) {
								?>
									<div class="image">
										<a href="<?php the_permalink();?>">
										<?php the_post_thumbnail(); ?>
											<!-- <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php $image['alt'];?>"> -->
										</a>
									</div><!--.image-->
								<?php 
										}
								//endif; ?>
								<div class="copy">
									<?php $job_title = get_field("job_title");
									$company_name = get_field("company_name");
									if($job_title):?>
										<h2><?php echo $job_title;?></h2>
									<?php endif;
									if($company_name):?>
										<div class="excerpt"><?php echo $company_name; ?></div><!--.excerpt-->
									<?php endif;?>
								</div><!-- copy -->	
								<div class="clear"></div>
								<?php if (function_exists('wpp_get_views')):?>
									<div class="data"> 
										<div class="date"><?php echo get_the_date(); ?></div><!--.date-->
										<div class="views">
											Views:&nbsp;<?php echo wpp_get_views( get_the_ID() );?>
										</div><!--.views-->
									</div><!--.data-->
								<?php endif;?>
								<div class="button">
									<a href="<?php the_permalink();?>">View</a>
								</div><!--.button-->
								<div class="clear"></div>
							</div><!--.job-->
					<?php endwhile; ?>
					</section>
					<?php 
					// pagi_posts_nav(); 
					//echo get_the_ID();
					pagi_posts_nav_modified($query); 
					wp_reset_postdata();
					wp_reset_query();
					?>
				
			<?php else : ?>
				<article id="post-0" class="site-content post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
					</header>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif;  ?>
			</div>

			<div class="widget-area">
				<?php get_template_part('ads/job-board-home');?>
				<?php //get_template_part('inc/job-board-partners') ?>
				<?php 
					$post = get_post(48778); 
					setup_postdata( $post );
					 
						
					 
					 
					?>
				<?php if (function_exists('wpp_get_views')): ?>
					<div class="job-views">
						Total Monthly Job Board Views:&nbsp;<?php echo wpp_get_views( get_the_ID() );?>
					</div><!--.views-->
				<?php endif;?>
				<div class="job-sidebar">
					<a class="button" href="<?php echo get_permalink(48786);?>">Post a Job</a>
					<?php $copy = get_field("post_job_copy");
					if($copy):?>
						<div class="copy">
							<?php echo $copy;?>
						</div><!--.copy-->
					<?php endif;?>
				</div>

				<div class="brew-sidebar">
					<div class="border-title">
						<h2>Morning Brew</h2>
					</div><!-- border title -->
					<div class="brew-wrapper">
						<?php $copy = get_field("morning_brew_copy");
						if($copy):?>
							<div class="copy">
								<?php echo $copy;?>
							</div><!--.copy-->
						<?php endif;?>
						<a class="button" href="<?php echo get_permalink(21613);?>">Signup</a>
					</div><!--.wrapper-->
				</div><!--.brew-sidebar-->
				<?php wp_reset_postdata(); ?>
				<?php get_template_part('ads/right-big'); ?>
			</div><!--.widget-area-->


			
       		
		</div><!-- site content -->
        
        <!-- 
			Ad Zone

======================================================== -->        
        
        
        <div class="clear"></div>

		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>