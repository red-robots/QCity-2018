<?php 
//
//		Need to query Google AD scripts
//
// 	$wp_query = new WP_Query();
// 	$wp_query->query(array(
// 	'post_type'=>'ad',
// 	'posts_per_page' => -1
// ));
// 	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post();
// 	$headerScript = get_field('header_script');
// 	$enable = get_field('enable_ad');
// 	if( $enable == 'Yes' ) :
// 		if( $headerScript != '' ) { 
//             echo $headerScript;
//             echo "<!--".get_the_title()."-->";
//         }
// 	endif; 
// 	endwhile; endif; wp_reset_postdata(); wp_reset_query();

	//
//		Need to query Google AD scripts
//
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=> array('sponsor', 'ad'),
		'posts_per_page' => -1
	));
	if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post();
		$headerScript = get_field('header_script');
		$enable = get_field('enable_ad');
		$id = get_the_ID();
		if( $enable == 'Yes' ) :
			if( $headerScript != '' ) { echo $headerScript; }
		endif; // end if enabled
	    $headerScript = get_field('header_script_header');
		$enable = get_field('enable_ad_header');
		if( $enable == 'Yes' ) :
			if( $headerScript != '' ) { 
	            echo $headerScript;
	            echo "<!--".get_the_title()."-->"; 
	        }
		endif; // end if enabled


		/*
				If it's the pencil ad
		
		*/
		if( $id == 9 ) {
			$googleScript = get_field('ad_script');
			$pencilAdImage = get_field('pencil_ad');
			$pencilLink = get_field('pencil_link');
			$size = 'large';
			$pencilAd = $pencilAdImage['sizes'][ $size ];
			$enable = get_field('enable_ad');
			
			if( $enable == 'Yes' ) :
				$letsShow = 'yes';
				echo '<!-- pencil -->';
				if( $pencilAdImage != '' ) {
					// echo '<div class="pencil-ad">';
					// if( $pencilLink != '' ) {echo '<a href="'.$pencilLink.'">';}
					// echo '<img src="'.$pencilAdImage.'" />';
					// if( $pencilLink != '' ) {echo '</a>';}
					// echo '</div>';	
					$show = '<div class="pencil-ad"><a href="'.$pencilLink.'"><img src="'.$pencilAdImage['url'].'" /></a>';
				} else {
					if( $googleScript != '' ) {
						$letsShow = 'yes';
						// echo '<div class="pencil-ad">';
						// echo $googleScript;
						// echo '</div><!-- end pencil ad -->';	
						$show = '<div class="pencil-ad">'.$googleScript.'</div><!-- end pencil ad -->';
					}

				}
			
			endif; // endif the ad is enabled
		}

	endwhile; endif; wp_reset_postdata(); wp_reset_query();
?>