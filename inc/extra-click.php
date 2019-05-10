<section class="extraclick">
	<h2 class="headline">More Stories from Qcitymetro</h2>

<?php 
/* 

	Get the 4 main stories from the 4 main sections. 

*/

// Categort ID's
// $healthID = 'category_6';
$healthID = 'category_5'; // Entertainment
$peopleID = 'category_4';
$newsID = 'category_1';
$faithID = 'category_2465'; // Qcity Biz
// $faithID = 'category_2';

// Get selected Posts
$healthFeaturedPost = get_field('post', $healthID);
$peopleFeaturedPost = get_field('post', $peopleID);
$newsFeaturedPost = get_field('post', $newsID);
$faithFeaturedPost = get_field('post', $faithID);

// Show 4 posts 
// if( $healthFeaturedPost )  :
// $post = $healthFeaturedPost;
// setup_postdata( $post ); 

// $term = get_the_terms($section1->ID, 'category');
// $termId = $term[0]->term_id;
/*

###########  	Health    ###############


*/
// $color = get_field( 'category_color', 'category_6');
$color = get_field( 'category_color', 'category_5');
if( $healthFeaturedPost != '' )  {
	$args = array(
	    'posts_per_page' => 1, 
	    'post__in' => array($healthFeaturedPost->ID)
	);
} else {
	$args = array(
	    'posts_per_page' => 1, 
	    // 'cat' => '6', 
	    'cat' => '5', 
	    'meta_query' => [
	        [
	            'key' => '_yoast_wpseo_primary_category',
	            // 'value' => '6',
	            'value' => '5',
	        ]
	    ],
	    
	);
}
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
	// echo 'wehave post';
    while ( $q->have_posts() ) {
    $q->the_post();   ?> 

	<div class="extra-click blocks">
		<div class="solid-border-title" style="border-bottom: 3px solid <?php echo $color; ?>">
            <h2 style="background-color: <?php echo $color; ?>">Entertainment</h2>
            <!-- <h2 style="background-color: <?php echo $color; ?>">Health</h2> -->
        </div><!-- border title -->
		<a href="<?php the_permalink(); ?>">
			<div class="post-block-image">
               <?php  the_post_thumbnail('thirds'); ?>
           </div>
           <h2 class="ctitle js-titles"><?php the_title(); ?></h2>
		</a>
	</div><!-- extra click -->
<?php 
	}
    wp_reset_postdata();
    wp_reset_query();
}	

// if( $peopleFeaturedPost )  :
// $post = $peopleFeaturedPost;
// setup_postdata( $post ); 
// $term = get_the_terms($section1->ID, 'category');
// $termId = $term[0]->term_id;
/*

###########  	People    ###############


*/
$color = get_field( 'category_color', 'category_4' );
if( $peopleFeaturedPost != '' )  {
	$args = array(
	    'posts_per_page' => 1, 
	    'post__in' => array($peopleFeaturedPost->ID)
	);
} else {
	$args = array(
	    'posts_per_page' => 1, 
	    'cat' => '4', 
	    'meta_query' => [
	        [
	            'key' => '_yoast_wpseo_primary_category',
	            'value' => '4',
	        ]
	    ],
	    
	);
}
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
	// echo 'wehave post';
    while ( $q->have_posts() ) {
    $q->the_post();   ?> 

	<div class="extra-click blocks">
		<div class="solid-border-title" style="border-bottom: 3px solid <?php echo $color; ?>">
            <h2 style="background-color: <?php echo $color; ?>">People</h2>
        </div><!-- border title -->
		<a href="<?php the_permalink(); ?>">
			<div class="post-block-image">
               <?php  the_post_thumbnail('thirds'); ?>
           </div>
           <h2 class="ctitle js-titles"><?php the_title(); ?></h2>
		</a>
	</div><!-- extra click -->
<?php 
	}
    wp_reset_postdata();
    wp_reset_query();
}	

// if( $newsFeaturedPost )  :
//$post = $newsFeaturedPost;
// echo '<pre>';
// print_r($newsFeaturedPost);
// echo '</pre>';
// echo $newsFeaturedPost->ID;
//setup_postdata( $post ); 
// $term = get_the_terms($section1->ID, 'category');
// $termId = $term[0]->term_id;
/*

###########  	News & Buzz    ###############


*/
$color = get_field( 'category_color', 'category_1' );
if( $newsFeaturedPost != '' )  {
	$args = array(
	    'posts_per_page' => 1, 
	    'post__in' => array($newsFeaturedPost->ID)
	);
} else {
	$args = array(
	    'posts_per_page' => 1, 
	    'cat' => '1',
	    'meta_query' => [
	        [
	            'key' => '_yoast_wpseo_primary_category',
	            'value' => '1',
	        ]
	    ], 
	    
	);
}
// echo '<pre>';
// print_r($args);
// echo '</pre>';
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
	// echo 'wehave post';
    while ( $q->have_posts() ) {
    $q->the_post();   

   // echo get_the_ID();

    ?> 

	<div class="extra-click blocks">
		<div class="solid-border-title" style="border-bottom: 3px solid <?php echo $color; ?>">
            <h2 style="background-color: <?php echo $color; ?>">News &amp; Buzz</h2>
        </div><!-- border title -->
		<a href="<?php the_permalink(); ?>">
			<div class="post-block-image">
               <?php  the_post_thumbnail('thirds'); ?>
           </div>
           <h2 class="ctitle js-titles"><?php the_title(); ?></h2>
		</a>
	</div><!-- extra click -->
<?php 
// endif; 
	}
    wp_reset_postdata();
    wp_reset_query();
}
/*

###########  	Faitth    ###############

2465
*/
// $color = get_field( 'category_color', 'category_2' );
$color = get_field( 'category_color', 'category_2465' );
if( $faithFeaturedPost != '' )  {
	$args = array(
	    'posts_per_page' => 1, 
	    'post__in' => array($faithFeaturedPost->ID)
	);
} else {
	$args = array(
	    'posts_per_page' => 1, 
	    // 'cat' => '2',
	     'cat' => '2465', 
	    'meta_query' => [
	        [
	            'key' => '_yoast_wpseo_primary_category',
	            // 'value' => '2',
	            'value' => '2465',
	        ]
	    ],
	    
	);
}
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
	// echo 'wehave post';
    while ( $q->have_posts() ) {
    $q->the_post();  //echo get_the_ID(); ?>  


       <div class="extra-click blocks">
		<div class="solid-border-title" style="border-bottom: 3px solid <?php echo $color; ?>">
            <!-- <h2 style="background-color: <?php echo $color; ?>">Faith</h2> -->
            <h2 style="background-color: <?php echo $color; ?>">Qcity Biz</h2>
        </div><!-- border title -->
		<a href="<?php the_permalink(); ?>">
			<div class="post-block-image">
               <?php  the_post_thumbnail('thirds'); ?>
           </div>
           <h2 class="ctitle js-titles"><?php the_title(); ?></h2>
		</a>
	</div><!-- extra click -->
     
  <?php   }
    wp_reset_postdata();
}


wp_reset_postdata();?>
</section>