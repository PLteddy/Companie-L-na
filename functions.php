
<?php

//Pour lier le css
function add_style() {
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css', false);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false); //wordpress ajoute à la file le style
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/footer.css', false);
  wp_enqueue_style('header-style', get_template_directory_uri() . '/header.css', false);
  wp_enqueue_style('accueil-style', get_template_directory_uri() . '/accueil.css', false);
  wp_enqueue_style('slider-style', get_template_directory_uri() . '/slider.css', false);
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/swiper.css', false);
  wp_enqueue_style('agenda-style', get_template_directory_uri() . '/agenda.css', false);
}
add_action( 'wp_enqueue_scripts', 'add_style' ); // au moment où il charge enqueue_scripts il appelle le style

function add_script() {
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/swiper.js', array(), false);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('swiper-js'), false);
}
add_action('wp_enqueue_scripts', 'add_script');


//Pour rajouter une taille d'image name, height, width, crop
  add_image_size( 'custom_size', 100, 300 , true ) 


?>

