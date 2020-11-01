<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(' | ', true, 'right'); ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="shortcut icon" href="#" />
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body <?php body_class( 'grid' ); ?>>
  <header class="site-title">
    <button class="p-hamburger p-gmenu--bt">
      <span class="is-hamburger">Menu</span>
      <div class="my-parts">
        <span></span>
      </div>
    </button>
    <h1 class="heading">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a>
    </h1>
    <form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
      <input type="text" class="use_icon fa-search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
      <input type="submit" class="search-btn" name="submit"  id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </form>
  </header>
  