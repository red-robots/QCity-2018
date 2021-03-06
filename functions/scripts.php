<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {

		wp_enqueue_style( 'acstarter-style', get_template_directory_uri() . '/style.css' );
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', false);
		wp_enqueue_script('jquery');

	// 	wp_enqueue_script( 
	// 		'acstarter-blocks', 
	// 		get_template_directory_uri() . '/assets/js/vendors.min.js', 
	// 		array(), '20120206', 
	// 		false 
	// 	);

	// wp_enqueue_script( 
	// 		'acstarter-custom', 
	// 		get_template_directory_uri() . '/assets/js/custom.js', 
	// 		array(), '20120206', 
	// 		false 
	// 	);
		
		//Homepage slider 'flexslider' scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') , '1.0' , true );
		wp_enqueue_script('flexslider');
		
		//Isotpope...
		wp_register_script(
			'navigation',
			get_bloginfo('template_directory') . '/js/navigation.js',
			array('jquery'), '1.2', true );
		wp_enqueue_script('navigation');


		//Isotpope...
		wp_register_script(
			'isotope',
			get_bloginfo('template_directory') . '/js/isotope.min.js',
			array('jquery'), '1.2', true );
		wp_enqueue_script('isotope');
		
		
		//Images loaded...
		wp_deregister_script('imagesloaded');
		wp_register_script(
			'imagesloaded',
			get_bloginfo('template_directory') . '/js/imagesloaded.js',
			array('jquery'), '3.2.2', true );
		wp_enqueue_script('imagesloaded');
		
		//Equal heights div...
		wp_register_script(
			'blocks',
			get_bloginfo('template_directory') . '/js/blocks.js',
			array('jquery'), '1.0', true );
		wp_enqueue_script('blocks');
		
		//Colorbox...
		wp_register_script(
			'colorbox',
			get_bloginfo('template_directory') . '/js/colorbox.js',
			array('jquery'),'1.0', true );
		wp_enqueue_script('colorbox');

		//Custom Theme scripts...
		wp_enqueue_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery','navigation','isotope','colorbox','blocks','imagesloaded','flexslider'), '1.06' , true );







		$vars = array(
			'url' => admin_url( 'admin-ajax.php' ),
			'postid'=>get_the_ID()
		);
		$tax = get_query_var( 'taxonomy' );
		$term = get_query_var( 'term' );
		if(!empty($tax)){
			$vars['tax']=$tax;
		} 
		if(!empty($term)){
			$vars['term']=$term;
		} 
		if(isset($_GET['date'])&&!empty($_GET['date'])){
			$vars['date']=$_GET['date'];
		} 
		if(isset($_GET['category'])&&!empty($_GET['category'])){
			$vars['category']=$_GET['category'];
		} 
		if(isset($_GET['search'])&&!empty($_GET['search'])){
			$vars['search']=$_GET['search'];
		} 
		wp_localize_script( 'custom', 'bellaajaxurl', $vars);
	}
}
add_action('wp_enqueue_scripts', 'ineedmyjava');