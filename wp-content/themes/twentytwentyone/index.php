<?php
session_start();
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<?php
			if (have_posts()) {

				// Load posts loop.
				while (have_posts()) {
					the_post();

					get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
				}

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();
			} else {

				// If no content, include the "No posts found" template.
				get_template_part('template-parts/content/content-none');
			}
			?>

		</div>

		<div class="col-md-3">

			<!-- module 12 (comment) -->
			<div class="container">
				<p>Comment </p>
				<hr class="border-bottom-hr">
				<div class="content-comment">
					<ul class="wp-block-latest-posts__list wp-block-latest-posts">
						<?php
						// if(isset($_SESSION['list-posts-title']))
						// echo $_SESSION['list-posts-title'];
						$args = array(
							'numberposts' => 5, // Số lượng bài viết bạn muốn lấy
							'post_status' => 'publish', // Chỉ lấy các bài viết đã được xuất bản
						);

						$recent_posts = get_posts($args);

						if ($recent_posts) {
							foreach ($recent_posts as $post) {
								setup_postdata($post);
								echo '<li class="type-12"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li><br>';
							}
							wp_reset_postdata(); // Đặt lại dữ liệu bài viết
						} else {
							echo 'Không tìm thấy bài viết gần đây.';
						}
						?>
					</ul>
				</div>

			</div>
		</div>
		<!-- module 12 (comment) -->
	</div>
</div>
<?php

get_footer();
?>