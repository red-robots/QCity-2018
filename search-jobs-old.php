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
				<div class="site-content">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="featured-event">
							<div class="entry-content">
								<div class="search-content-link">
									<a href="<?php echo get_the_permalink();?>" class="search-link">DETAILS</a>
									<h2 class="search"><?php the_title(); ?></h2>
									<div class="postdate"><?php echo get_the_date(); ?></div>
									<?php the_excerpt(); ?>
								</div><!--.search-content-link-->
								<?php $terms = get_the_terms(get_the_ID(),'category');
								if(!is_wp_error($terms)&&is_array($terms)&&!empty($terms)):?>
									<div class="featured-cat">
										<h3>Category:</h3>
										<?php $i = 1;
										$max = count($terms);
										foreach($terms as $term):?>
											<div class="featured-cat-link">
												<?php $link = get_term_link($term);
												if(!is_wp_error($link)):?>
													<a href="<?php echo $link;?>">
												<?php endif;?>
													<?php echo $term->name;?>
												<?php if(!is_wp_error($link)):?>
													</a>
												<?php endif;?>
												<?php if($i<$max):?>
													<span>,</span>
												<?php endif;
												$i++;?>
											</div><!--.featured-cat-link-->
										<?php endforeach;?>
									</div><!--.featured-cat-->
								<?php endif;?>
								<?php $tags = get_the_tags(get_the_ID());
								if(!is_wp_error($tags)&&is_array($tags)&&!empty($tags)):?>
									<div class="featured-tags">
										<h3>Tags:</h3>
										<?php $i = 1;
										$max = count($tags);
										foreach($tags as $tag):?>
											<div class="featured-tags-link">
												<?php $link = get_term_link($tag);
												if(!is_wp_error($link)):?>
													<a href="<?php echo $link;?>">
												<?php endif;?>
													<?php echo $tag->name;?>
												<?php if(!is_wp_error($link)):?>
													</a>
												<?php endif;?>
												<?php if($i<$max):?>
													<span>,</span>
												<?php endif;
												$i++;?>
											</div><!--.featured-tags-link-->
										<?php endforeach;?>
									</div><!--.featured-tags-->
								<?php endif;?>
							</div><!-- entry -content -->
						</div><!-- featured event -->
					<?php endwhile; ?>
					<?php pagi_posts_nav(); ?>
				</div><!-- site content -->
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
			<?php endif; ?>
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