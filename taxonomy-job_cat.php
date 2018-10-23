<?php
/**
 * The template for displaying Archive pages
 *
 * 
 */
wp_reset_query();

get_header(); ?>

	<section id="primary" class="site-content-full">
		<?php 
				$post = get_post(48778); 
				setup_postdata( $post );
				get_template_part('inc/jobs-banner');
				 wp_reset_postdata();
			
			 ?>



			
		<div id="content" role="main" class="wrapper">
			<div class="site-content job-board">
			<?php if ( have_posts() ) : $queried_object = get_queried_object();  ?>
	        <header class="archive-header archive-push">
					
	                <div class="border-title">
	                    <h1>Job Search | <?php echo $queried_object->name; ?></h1>
	                </div><!-- border title -->

				</header><!-- .archive-header -->
	            
				

				<?php
				 
	  //var_dump( $queried_object );
				/* Start the Loop */ ?>
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

				<?php twentytwelve_content_nav( 'nav-below' );
				?>

			<?php else : 

			$post = get_post(48778); 
				setup_postdata( $post ); ?>
				<header class="archive-header archive-push">
					
	                <div class="border-title">
	                    <h1>Job Search</h1>
	                </div><!-- border title -->

				</header><!-- .archive-header -->
				<article class="entry-content">
					<?php $message = get_field('no_jobs_message');
					if($message) { echo '<h2>'.$message.'</h2>';} ?>
				</article>
				 
					
				 
				<?php wp_reset_postdata();
			 endif; ?>
			 </div>
			 <div class="widget-area">
				<?php get_template_part('ads/job-board-home');

				$post = get_post(48778); 
				setup_postdata( $post ); 

				?>
				<?php //get_template_part('inc/job-board-partners') ?>
				<?php if (function_exists('wpp_get_views')):?>
					<div class="job-views">
						Total Montly Job Board Views:&nbsp;<?php echo wpp_get_views( get_the_ID() );?>
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
			</div><!--.widget-area-->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>