<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointswp'),
		'description' => __('The offcanvas sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>',
	));
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'jointswp' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'jointswp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Safe Custom Blocks', 'jointswp' ),
		'id'            => 'safe-blocks',
		'description'   => esc_html__( 'Add widgets here.', 'jointswp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Hero Call to Action', 'jointswp' ),
		'id'            => 'hero-cta',
		'description'   => esc_html__( 'Add widgets here.', 'jointswp' ),
		'before_widget' => '<div class="hero-cta widget %2$s">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Newsletter Signup Form', 'jointswp' ),
		'id'            => 'news-signup',
		'description'   => esc_html__( 'Add widgets here.', 'jointswp' ),
		'before_widget' => '<div class="newsletter-signup"><div class="grid-full-contain-one-col widget %2$s">',
		'after_widget'  => '</div></div>',
	) );
	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!