<?php

function get_theme_image_url($path) {
  return get_stylesheet_directory_uri() . "/images" . "/" . $path;
}

function get_theme_icon_url($path) {
  return get_stylesheet_directory_uri() . "/assets/icons" . "/" . $path;
}

function get_template_url($path) {
  return get_stylesheet_directory_uri() . "/page-temmplates" . "/" . $path;
}

function is_blog_archive () {
  return ( is_archive() || is_category() || is_home() || is_tag()) && 'post' == get_post_type();
}
