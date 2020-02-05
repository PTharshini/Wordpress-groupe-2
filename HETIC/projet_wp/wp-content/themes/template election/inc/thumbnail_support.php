<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'add_aside_thumbnails_format');
function add_aside_thumbnails_format(){
  add_image_size('single_thumbnail','300','400',true);
}

add_action('after_setup_theme', 'add_full_thumbnails_format');
function add_full_thumbnails_format() {
  add_image_size('full','1400','999999999',false);
}

?>