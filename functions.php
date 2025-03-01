
<?php

//Pour lier le css
function add_style() {
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css', false);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false); //wordpress ajoute à la file le style
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css', false);
  wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css', false);
  wp_enqueue_style('accueil-style', get_template_directory_uri() . '/css/accueil.css', false);
  wp_enqueue_style('slider-style', get_template_directory_uri() . '/css/slider.css', false);
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/css/swiper.css', false);
  wp_enqueue_style('agenda-style', get_template_directory_uri() . '/css/agenda.css', false);
  wp_enqueue_style('spectacles-style', get_template_directory_uri() . '/css/spectacles.css', false);
  wp_enqueue_style('spectacles_details-style', get_template_directory_uri() . '/css/spectacles_details.css', false);
  wp_enqueue_style('action-style', get_template_directory_uri() . '/css/action.css', false);
  wp_enqueue_style('company-style', get_template_directory_uri() . '/css/compagnie.css', false);
}
add_action( 'wp_enqueue_scripts', 'add_style' ); // au moment où il charge enqueue_scripts il appelle le style

function add_script() {
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/swiper.js', array(), false);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array('swiper-js'), false);
   wp_enqueue_script('menu-burger-js', get_template_directory_uri() . '/menu-burger.js', array('jquery'), false);
}
add_action('wp_enqueue_scripts', 'add_script');


//Pour rajouter une taille d'image name, height, width, crop
  add_image_size( 'custom_size', 400, 400 , true ) 
?>


