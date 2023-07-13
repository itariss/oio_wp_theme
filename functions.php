<?php

function oio_registro_menu() {
  register_nav_menu('menu-navegacao', 'Menu navegação');
}

function oio_recursos() {
  add_theme_support( 'custom-logo' );
}

add_action('init', 'oio_registro_menu');
add_action( 'after_setup_theme', 'oio_recursos');