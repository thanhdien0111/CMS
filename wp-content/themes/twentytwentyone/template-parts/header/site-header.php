<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>
<style>
  .nav-link:hover {
    background: #E7E7E7;
    color: #E7E7E7;
  }

  .site-title {
    font-size: 15px;
    color: #828096;
  }

  .mdl-js {
    overflow-x: hidden;
  }

  .navbar {
    background: #F8F8F8;
    font-family: sans-serif;
  }
</style>

<header id="masthead">

  <nav class="navbar navbar-expand-lg navbar-light">
    <!-- tên trang web -->
    <?php get_template_part('template-parts/header/site-branding'); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- home -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="color: #828096;" href="<?php echo get_home_url() ?>">Home</a>
        </li>
      </ul>

      <!-- thanh search -->
      <?php get_search_form_header() ?>

      <ul class="navbar-nav" style="margin-left: 250px;">
        <?php wp_nav_menu(
          array(
            // của categories trên header
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'primary-menu-container',
            'items_wrap'      => '<ul id="primary-menu-list " class="navbar-nav ml-auto  wp-menu">%3$s</ul>',
            'fallback_cb'     => false,
          )
        );
        ?>
        <li class="nav-item">
          <a class="nav-link account" href="#">
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link account" href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
            Search</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle account" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle-o"></i>
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Register</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header><!-- #masthead -->