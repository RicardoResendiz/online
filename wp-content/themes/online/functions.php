<?php
	require_once('libs/bs4navwalker.php');

	function online_styles(){
		//css
		wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css');
		wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/css/normalize.css');
		wp_enqueue_style( 'flaticon', get_stylesheet_directory_uri().'/css/flaticon.css');
		wp_enqueue_style( 'themify', get_stylesheet_directory_uri().'/css/themify-icons.css');
		wp_enqueue_style( 'carousel', get_stylesheet_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css');
		wp_enqueue_style( 'select', get_stylesheet_directory_uri().'/vendors/nice-select/css/nice-select.css');
		wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');

		wp_enqueue_style( 'style', get_stylesheet_uri());

		//js
		
		wp_enqueue_script( 'jquery');
		wp_register_script( 'jquery2', 'https://code.jquery.com/jquery-2.2.4.min.js' , '', '', true );
		wp_enqueue_script( 'jquery2');
		wp_enqueue_script( 'popper', get_template_directory_uri().'/js/popper.js');
		wp_enqueue_script( 'bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js');
		wp_enqueue_script( 'select', get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js');
		wp_enqueue_script( 'carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js');
		wp_enqueue_script( 'thumb', get_template_directory_uri().'/js/owl-carousel-thumb.min.js');
		wp_enqueue_script( 'gmaps', get_template_directory_uri().'/js/gmaps.min.js');
		wp_enqueue_script( 'action', get_template_directory_uri().'/js/theme.js', array('jquery'),'3.2.1', true);
		wp_enqueue_script( 'resize', get_template_directory_uri().'/js/resize.js', array('jquery2'),'2.2.4',true);
	}
	add_action('wp_enqueue_scripts', online_styles );

	register_nav_menus( array(
		'menu_principal' => __('Menu Principal', 'online')
	));
?>