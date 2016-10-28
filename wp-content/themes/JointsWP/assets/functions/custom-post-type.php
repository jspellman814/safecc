<?php
	
add_action( 'init', 'safecc_create_posttype' );

function safecc_create_posttype() {
  register_post_type( 'safecc_blocks',
    array(
      'labels' => array(
        'name' => __( 'SAFE Custom Blocks' ),
        'singular_name' => __( 'SAFE Custom Block' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'safecc_blocks'),
    )
  );
  register_post_type( 'safecc_services',
    array(
      'labels' => array(
        'name' => __( 'SAFE Services' ),
        'singular_name' => __( 'SAFE Service' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'safecc_services'),
    )
  );

  register_post_type( 'safecc_hero',
    array(
      'labels' => array(
        'name' => __( 'SAFE Hero Images' ),
        'singular_name' => __( 'SAFE Hero Image' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'safecc_hero'),
    )
  );
  
  add_post_type_support( 'safecc_hero', 'thumbnail' );    

}
