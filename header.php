<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

  <!-- Proxima Nova Font -->
  <link rel="stylesheet" href="https://use.typekit.net/wmy5aqp.css">
</head>

<body <?php body_class(); ?>>

  <?php maweo_navbar_before(); ?>

  <?php
  include_once ('template-parts/nav.php');
  ?>

  <?php maweo_navbar_after(); ?>