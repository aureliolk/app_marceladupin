<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

function googleTagManager() {
    echo '
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-227186325-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag("js", new Date());
		gtag("config", "UA-227186325-1");
	</script>';
	
}
add_action( 'wp_footer', 'googleTagManager' );

 
 add_action( 'wp_enqueue_scripts', 'hello_elementor_child_style' );
  function hello_elementor_child_style() {
	$ver = 2.2;
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'),$ver);
	wp_enqueue_script( 'custon-script', get_stylesheet_directory_uri() . '/script.js',array('jquery'),$ver,true);
}

/**
 * Your code goes below.
 */


function load_custom_wp_admin_style() {
	$ver = 1.9;

	wp_enqueue_style( 'child-admin-style', get_stylesheet_directory_uri() . '/admin/style.css',"",$ver);
	wp_enqueue_script( 'custon-script', get_stylesheet_directory_uri() . '/admin/script.js',array('jquery'),$ver,true);


}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );