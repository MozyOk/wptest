<?php

function theme_scripts()
{
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'theme-base-script', get_template_directory_uri() . '/base.js', array( 'jquery' ), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
