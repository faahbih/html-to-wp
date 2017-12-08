<?php 

add_theme_support('post-thumbnails'); /* suporte para imagem thumbnail */

function b2w_theme_styles(){

	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'css/bootstrap/bootstrap.min.css');
	wp_enqueue_style('style_css', get_template_directory_uri().'style.css');
}
add_action('wp_enqueue_scripts', 'b2w_theme_styles');

function b2w_theme_js(){
	wp_enqueue_scripts('bootstrap_js', get_template_directory_uri(),'js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_scripts('contact_me_js', get_template_directory_uri(),'js/contact_me.js', array('jquery'), '', true );
	wp_enqueue_scripts('jqbootstrap_valid_js', get_template_directory_uri(),'js/jqBootstrapValidation.js', array('jquery'), '', true );
	wp_enqueue_scripts('bootstrap_js', get_template_directory_uri(),'js/bootstrap.js', array('jquery'), '', true );	
}
add_action ('wp_enqueue_scripts','b2w_theme_js');

 ?>