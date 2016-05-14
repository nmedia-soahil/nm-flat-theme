<?php 
	/**
	*** Adding Scripts and styles to theme
	**/
	function nm_flat_scripts(){
		/**
		*** theme main css and jquery
		*** css/main.css
		*** js/main.js
		**/
		wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css' );
		wp_enqueue_script('jquery');
		wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js',array('jquery'));
		
		/**
		*** bootstrap styles and scripts
		*** css/bootstrap.min.css
		*** js/bootstrap.min.js
		**/
	    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
	    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
	   
	    /**
		*** prettyphoto style and scripts
		*** css/prettyPhoto.css
		*** js/jquery.prettyPhoto.js
		**/
		wp_enqueue_style('prettyPhoto-css', get_template_directory_uri().'/css/prettyPhoto.css');
		wp_enqueue_script('prettyPhoto-js', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array('jquery'));

		/**
		*** theme fonts and animation 
		*** css/font-awesome.min.css 
		*** css/animate.css
		**/
		wp_enqueue_style('font-awesome-css', get_template_directory_uri().'/css/font-awesome.min.css');
	    wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.css');

	    /**
		*** theme favicon and icons
		*** images/ico/favicon.ico
		*** images/ico/apple-touch-icon-144-precomposed.png
		***	images/ico/apple-touch-icon-114-precomposed.png
		*** images/ico/apple-touch-icon-72-precomposed.png
		*** images/ico/apple-touch-icon-57-precomposed.png 
		**/
		wp_enqueue_style('favicon-icon', get_template_directory_uri().'/images/ico/favicon.ico');
	    wp_enqueue_style('apple-touch-icon', get_template_directory_uri().'/images/ico/apple-touch-icon-144-precomposed.png');
	    wp_enqueue_style('apple-touch-icon-144', get_template_directory_uri().'/images/ico/apple-touch-icon-114-precomposed.png');
	    wp_enqueue_style('apple-touch-icon-72', get_template_directory_uri().'/images/ico/apple-touch-icon-72-precomposed.png');
	    wp_enqueue_style('apple-touch-icon-57', get_template_directory_uri().'/images/ico/apple-touch-icon-57-precomposed.png');    
	    
	}
add_action('wp_enqueue_scripts', 'nm_flat_scripts');
	
	/**
	*** Main function for theme that contains different function
	**/
	function nm_flat_theme(){
		/**
		*** add theme title function 
		**/
		add_theme_support('title-tag');
		/**
		*** register_nav_menu of our theme
		***	function Syntex: <?php register_nav_menu(  array( 'theme-location', __( 'description', 'theme-slug' ) )); ?>
		**/
		register_nav_menu('primary', __( 'Primary Menu', 'nm_flat_theme' ));
	}	
add_action('after_setup_theme', 'nm_flat_theme');
