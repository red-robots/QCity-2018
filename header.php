<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php the_field('google_analytics','option'); ?>
<!-- test -->
<script src="https://use.fontawesome.com/5001f6a306.js"></script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script>
window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1009068/In-Story_Gutenbers', [300, 250], 'div-gpt-ad-1563273598512-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
  
 window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1009068/Gutenburg_720x90', [728, 90], 'div-gpt-ad-1563293411913-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });

    window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1009068/600x200', [600, 200], 'div-gpt-ad-1563224728772-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });



</script>

<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/1009068/In-Story_Gutenbers', [[300, 250], [600, 200], [728, 90]], 'div-gpt-ad-1565127901858-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script type="text/javascript"async src="https://launch.newsinc.com/js/embed.js" id="_nw2e-js"></script>
<?php wp_head(); ?>

<?php include(locate_template('inc/google-ads.php', false, false)); ?>

</head>

<body <?php body_class(); ?>>

<?php include(locate_template('ads/pencil.php', false, false));  ?>

<div class="top"></div><!-- top -->

<div class="top-tabs-container">
    <div class="top-tabs">
        <nav>
            <ul class="top-nav">
            <li><a href="<?php bloginfo('url'); ?>/advertise">Advertise</a></li> | <li><a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a></li>
            </ul>
        </nav>
    </div><!-- top tabs -->
</div><!-- top tabs container -->

<div class="clear"></div>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">

    <!-- <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3> -->
    
		<div id="header-left">
        <h3 class="search-header">SEARCH SITE</h3>
        <?php get_template_part('inc/searchform'); ?>
        <div class="clear"></div>
        	<div class="header-date"><?php echo date('F d, Y'); ?></div>
            
        </div><!-- header left -->
        
        <div id="header-center">
        	<?php if(is_home()) { ?>
            <h1 class="logo">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </h1>
			<?php } else { ?>
                <div class="logo">
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </div>
            <?php } ?>
        </div><!-- header left -->
        
        <div id="header-right">
        <?php if( !is_front_page() ) { ?>
        <h3>RECEIVE UPDATES FROM Qcitymetro</h3>
        <?php //get_template_part('inc/emailsignup'); ?>
        <div class="header-signup"><a href="<?php bloginfo('url'); ?>/email-signup">Sign Up</a></div>
        <?php } ?>
        <div class="clear"></div>
        <?php 

        //acc_social_links(); 

        $facebooklink = get_field('facebook_link', 'option');
        $twitterlink = get_field('twitter_link', 'option');
        $linkedinlink = get_field('linkedin_link', 'option');
        $instagramlink = get_field('instagram_link', 'option');
        $googlelink = get_field('google_link', 'option');

    ?>
            <div id="sociallinks">
                <ul>
                    <li class="">
                        <a href="<?php echo $facebooklink; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li class="">
                        <a href="<?php echo $twitterlink; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="">
                        <a href="<?php echo $instagramlink; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div><!-- header left -->
		
		
       <div class="head-contents"> 
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="wrapper">
                
                <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
                <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                
                <?php if( !is_front_page() ) { ?>
                	<div class="home-nav"><a href="<?php bloginfo('url'); ?>">Home</a></div>
                <?php } ?>
                
                <?php wp_nav_menu( array( 
					'theme_location' => 'primary', 
					'menu_class' => 'nav-menu' 
					) ); ?>
                </div><!-- wrapper -->
            </nav><!-- #site-navigation -->
        </div><!-- head contents -->

	</header><!-- #masthead -->

	<div id="main">
