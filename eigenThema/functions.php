<?php

function themaJan_bronnen() {

  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'themaJan_bronnen');


//registreer menu's van het thema
register_nav_menus( array (
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Foorer menu'),
));




 ?>
