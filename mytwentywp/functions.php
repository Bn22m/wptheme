<?php
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('IMAGES', TEMPPATH. "/images");
define('JPG', dynamicImage());
add_theme_support('nav-menus');

if (function_exists('register_nav_menus')) {
  register_nav_menus(
    array(
      'main' => 'Main Nav',
    )
  );
}

function custom_styling(){
  wp_enqueue_style('style', get_stylesheet_uri());
  add_ation('wp_enqueue_scripts', 'custom_styling');
}

function dynamicImage(){
  $n =  rand(1, 200);
  //echo $n;
  //echo " <> ";
  if (($n >= 195) | ($n == (146-13))){
    return "f0b37c6612070a5ebe7c0c31c9e933687a2a02cb3398437cd4a8117a5d8e6b1bc43ec72860617a35a8657a090494eaf65567df7f994c02598c29a93d1a0418d00.jpg";
  }
  $n2 = $n%2;
  if ($n2 == 0){
    //echo $n;
    return "d5purple.jpg";
  } else {
    //echo $n2;
    return "d5pink.jpg";
  }
}

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function mytwentywp_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'mytwentywp' ),
		'expanded' => __( 'Desktop Expanded Menu', 'mytwentywp' ),
		'mobile'   => __( 'Mobile Menu', 'mytwentywp' ),
		'footer'   => __( 'Footer Menu', 'mytwentywp' ),
		'social'   => __( 'Social Menu', 'mytwentywp' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'mytwentywp_menus' );

echo strlen(JPG) * rand(1, 200);
?>
