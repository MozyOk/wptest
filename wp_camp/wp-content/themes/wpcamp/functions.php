<?php

function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'theme-base-script', get_template_directory_uri() . '/base.js', array( 'jquery' ), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'SidebarL',
		'id'            => 'sidebar-l',
		'description'   => '左のサイドバーです',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'SidebarR',
		'id'            => 'sidebar-r',
		'description'   => '右のサイドバーです',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'theme_widgets_init' );