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
			<?php if ( have_posts() ) : ?>
	        <header class="archive-header archive-push">
					
	                <div class="border-title">
	                    <h1>Job Search</h1>
	                </div><!-- border title -->

				</header><!-- .archive-header -->
	            
				

				<?php
				 $queried_object = get_queried_object();
	 // var_dump( $queried_object );
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div class="featured-post">
				<?php _e( 'Featured post', 'twentytwelve' ); ?>
			</div>
			<?php endif; ?>
			<header class="entry-header">
				<?php the_post_thumbnail(); ?>
				<?php if ( is_single() ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<?php endif; // is_single() ?>
				<div class="views-search">
					<p>Views for this job:&nbsp;<?php echo wpp_get_views( get_the_ID() );?></p>
					
				</div><!--.views-->
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			<?php endif; ?>

			
		</article><!-- #post -->

				<?php endwhile;

				twentytwelve_content_nav( 'nav-below' );
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
				<?php get_template_part('ads/job-board-home');?>
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
			</div><!--.widget-area-->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>