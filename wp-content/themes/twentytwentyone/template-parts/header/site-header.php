<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
=======
<?php
>>>>>>> D-01-LanAnh

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
  }

  .site-title {
    font-weight: lighter;
  }

  .mdl-js {
    overflow-x: hidden;
  }

  .navbar {
    background: #F8F8F8;
  }
</style>

<header id="masthead">

<<<<<<< HEAD
				<li class="nav-item active">
					<a class="nav-link" href="">
						Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<form role="search" method="get" class="form-inline my-2 my-lg-0" style="padding-left: 20px;" action="">
					<!-- Các thay đổi HTML khác ở đây -->
					<input type="text" placeholder="search" class="form-control mr-sm-2 ip_search " required name="s">
					<button type="submit" class="btn btn-dark my-2 my-sm-0 btn_s">Submit</button>
				</form>
			</ul>

			<ul class="navbar-nav nav_a">
				<li>Thể thao</li>
				<li>Khoa học</li>
				<li>Tin tức</li>
			</ul>

			<ul class="navbar-nav nav_a">
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa fa-solid fa-ellipsis"></i>
						Menu
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa fa-solid fa-magnifying-glass"></i>
						Search
					</a>
				</li>
=======
  <nav class="navbar navbar-expand-lg navbar-light">
    <?php get_template_part('template-parts/header/site-branding'); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
>>>>>>> D-01-LanAnh

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo get_home_url() ?>">Home</a>
        </li>
      </ul>
      <?php get_search_form_header() ?>

<<<<<<< HEAD
			</ul>
		</div>
	</div>
</nav>
=======
=======
>>>>>>> D-29-Oanh
<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
      <ul class="navbar-nav ml-auto">
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
>>>>>>> D-01-LanAnh
=======
>>>>>>> D-29-Oanh
