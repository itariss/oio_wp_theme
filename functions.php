<?php

function oio_registro_menu() {
  register_nav_menu('menu-navegacao', 'Menu navegação');
}

add_action('init', 'oio_registro_menu');