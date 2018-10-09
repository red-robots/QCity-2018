<?php
/**
 * The template for displaying Archive pages
 *
 * 
 */
wp_reset_query();
get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main" class="wrapper">

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
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

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

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>