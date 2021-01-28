<?php 
	
	define('WORDSMITH_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('WORDSMITH_DIR_JS', get_template_directory_uri() . '/assets/js/');
	define('WORDSMITH_DIR_IMG', get_template_directory_uri() . '/assets/images/');

	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_style('base', WORDSMITH_DIR_CSS . 'base.css');
		wp_enqueue_style('vendor', WORDSMITH_DIR_CSS . 'vendor.css');
		wp_enqueue_style('main', WORDSMITH_DIR_CSS . 'main.css');

		wp_enqueue_script('jq', WORDSMITH_DIR_JS . 'jquery-3.2.1.min.js', array('jquery'), null, true);
		wp_enqueue_script('modernizr', WORDSMITH_DIR_JS . 'modernizr.js');
		wp_enqueue_script('plugin', WORDSMITH_DIR_JS . 'plugins.js', array('jquery'), null, true);
		wp_enqueue_script('main', WORDSMITH_DIR_JS . 'main.js', array('jquery'), null, true);
	});


	add_action('after_setup_theme', function() {
		add_theme_support( 'post-thumbnails' );
		register_nav_menu('header', 'Меню в шапке');
	});

	add_action('widgets_init', function() {
		register_sidebar([
			'name' => 'Боковая колонка для потстов',
			'id' => 'sidebar-post-single',
			'description' => 'fasfklsf'
		]);
	});


	add_shortcode( 'footag', 'footag_func' );

	function footag_func(){

			query_posts( 'posts_per_page=6' );
			while( have_posts() ) {
				the_post();
			} 
		 return "foo = aslf'psdka;fksdakf';kas;ldfkl;sdk";
	}




	// результат: 
	// шоткод [footag foo="bar"] в тексте будет заменен на "foo = bar"


/*	add_action('wp_qnueue_scripts', function() {
		wp_qnueue_style('style', get_stylesheet_uri())
	})*/
/*
	   ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>*/